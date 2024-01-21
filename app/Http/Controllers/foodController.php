<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class foodController extends Controller{

    public function tambahPesanan(Request $req){

        $dataArray = $req->selectedMenus;
        $dataString = implode(',', $dataArray);
    
        $updating = 0;
        $req->status = $updating;
    
        // Insert the record and get the ID
        $insertedId = DB::table("pesanan")->insertGetId([
            "meja" => $req->meja,
            "menu" => $dataString,
            "orang" => $req->orang,
            "total_harga" => $req->total_harga,
            "status" => $updating,
            "created_at" => now()
        ]);
    
        // Now, $insertedId contains the ID of the newly inserted record
    
        $phpContent = "<?php\n\nreturn " . var_export($req->all() + ['id' => $insertedId], true) . ";\n";
    
        $storagePath = public_path('formPesanan');
    
        if (!file_exists($storagePath)) {
            mkdir($storagePath, 0777, true);
        }
    
        $filename = 'struk_' . time() . '.php';
    
        file_put_contents($storagePath . '/' . $filename, $phpContent);
    
        return redirect('pesanan');
    }       

    public function tambahMakanan(Request $req){
        
        $updating = 0;

        DB::table("makanan")->insert([
            "makanan"=>$req->makanan,
            "harga"=>$req->harga,
            "status"=>$updating,
            "created_at"=>now()
        ]);  

        return redirect('menu');
    }

    public function selesaiPesanan(Request $req) {
        $updating = 0;

        DB::table('riwayat')->insert([
            'pid' => $req->pid,
            'total_harga' => $req->total_harga,
            'status' => $updating,
            'created_at' => now()
        ]);
    
        return redirect('pesanan');
    }
    
    
        
    public function detailPesanan(){
        $folderPath = public_path('formPesanan');
        
        $files = File::allFiles($folderPath);

        $selectedMenus = [];

        foreach ($files as $file) {
            $data = include($file->getPathname());

            $selectedMenus = array_merge($selectedMenus, $data['selectedMenus']);
        }

        return view('proyek.Pesanan', compact('selectedMenus'));

    }

    public function lihatMenu(){
        $lihat = DB::table("makanan")->get();
        return view('proyek.menu')->with('lihat',$lihat);
    }

    public function listMenu(){
        $lihat = DB::table("makanan")->get();
        return view('proyek.tambahPesanan')->with('lihat',$lihat);
    }

    public function riwayat(){
        $logs = DB::table("riwayat")->get();
        return view('proyek.logs')->with('logs',$logs);
    }

    public function hapusMakanan($id){
        DB::table("makanan")->where('id','=',$id)->delete();

        return redirect('menu');
    }
    public function hapusPesanan($id){
        DB::table("pesanan")->where('id','=',$id)->delete();

        return redirect('menu');
    }
}
