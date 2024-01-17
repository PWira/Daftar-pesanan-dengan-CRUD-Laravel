<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class foodController extends Controller{

    public function tambahPesanan(Request $req){

        $dataArray = $req->menu;
        $dataString = implode(',', $dataArray);

        $updating = 0;

        DB::table("pesanan")->insert([
            "meja"=>$req->meja,
            "menu"=>$dataString,
            "orang"=>$req->orang,
            "total_harga"=>$req->total_harga,
            "penyediaan"=>$req->penyediaan,
            "status"=>$req->status,
            "created_at"=>now()
        ]);  

        return redirect('pesanan');
    }

    public function tambahMakanan(Request $req){
        
        $updating = 0;

        DB::table("makanan")->insert([
            "makanan"=>$req->makanan,
            "harga"=>$req->harga,
            "penyediaan"=>$req->penyediaan,
            "status"=>$updating,
            "created_at"=>now()
        ]);  

        return redirect('menu');
    }
        
    public function detailPesanan(){
        $lihat = DB::table("pesanan")->get();
        return view('proyek.Pesanan')->with('lihat',$lihat);
    }

    public function lihatMenu(){
        $lihat = DB::table("makanan")->get();
        return view('proyek.menu')->with('lihat',$lihat);
    }

    public function hapusMakanan($id){
        DB::table("makanan")->where('id','=',$id)->delete();

        return redirect('lihat-barang');
    }
}
