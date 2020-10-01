<?php

namespace App\Http\Controllers;
use App\Barang;
use Alert;
use Illuminate\Http\Request;

class footwear extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function vans_ctlg()
    {
        $barangs = Barang::paginate(20);
        //dd($barangs);
        return view('footwear.vans', compact('barangs'));
    }

    public function piero_ctlg()
    {
        $barangs = Barang::paginate(20);
        //Alert::success('Pesanan Sukses dimasukann Ke Cart', 'Succeed');
        return view('footwear.piero', compact('barangs'));
    }
    public function gmx()
    {
        $barangs = Barang::paginate(20);
        return view('footwear.gmx',compact('barangs'));
    }
    
}
