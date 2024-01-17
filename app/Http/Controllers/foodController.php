<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class foodController extends Controller{

    public function daftarPesanan(Request $req){
        //raw query -> mysqli_query("insert into barang value()")
        DB::table("pesanan")->insert([
            "meja"=>$req->meja,
            "menu"=>$req->menu,
            "jumlah_orang"=>$req->jumlah_orang,
            "total_harga"=>$req->total_harga,
            "lama_penyediaan"=>$req->lama_penyediaan,
            "created_at"=>now()
        ]);  

        return redirect('pesanan');
    }
        
    public function detailPesanan(){
        $pesanan = DB::table("pesanan")->get();
        return view('detailPesanan')->with('pesanan',$pesanan);
    }

    public function lihatMenu(){
        $menu = DB::table("menu")->get();
        return view('menu')->with('menu',$menu);
    }

    public function hapusBarang($id){
        DB::table("barang")->where('id','=',$id)->delete();

        return redirect('lihat-barang');
    }
}
