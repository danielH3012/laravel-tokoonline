<?php

namespace App\Http\Controllers;
use App\Models\barang;
use App\Models\pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class PesanController extends Controller
{
    //wajib login
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id){
        //ngambil data barang                          ngambil data pertama
        $barang =  barang::where('id_barang',$id)->first();

        //masukin ke db pesanan
        pesanan::create([
                'id' => Cache::get('user_id_' . Auth::id()),
                'id_barang' => $barang['id_barang'],
                'total_harga' => $barang['harga_barang'],
                'tanggal' => date('Y-m-d H:i:s'),
                'jumlah_barang' => 1
        ]);
        
        //lempar ke view
        return view('pesan', compact('barang'));
    }


}
