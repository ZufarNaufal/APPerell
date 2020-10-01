<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Barang;
class outerwear extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function dropdead()
    {
        $barangs = Barang::paginate(20);
        return view('outerwear.dropdead',compact('barangs'));
    }
    public function horizon()
    {
        $barangs = Barang::paginate(20);
        return view('outerwear.horizon',compact('barangs'));

    }
    public function tenue()
    {
        $barangs = Barang::paginate(20);
        return view('outerwear.tenue',compact('barangs'));

    }
}
