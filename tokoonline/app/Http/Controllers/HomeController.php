<?php

namespace App\Http\Controllers;
use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = Cache::get('user_id_' . Auth::id()); 
        //ngambil data barang
        $barang =  barang::paginate(20);
        //lempar ke view
        return view('home', compact('barang','userId'));
    }
}
