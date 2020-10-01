<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Pesanan;
use App\PesananDetail;
use Carbon\Carbon;
//use DB;
//use SweetAlert;
use Auth;
use App\User;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');   
    }

    public function index($id)
    {
        $barangs = Barang::where('id', $id)->first();
        return view('order.pesan', compact('barangs'));
    }

    public function pesan(Request $request, $id)
    {
        $barangs = Barang::where('id', $id)->first();
        $tanggal = Carbon::now();

        //validasi buat pesanan yang mlebihi stock
        if($request->jumlah_pesan > $barangs->stock )
        {
            return redirect('/order/pesan/'. $id);
        }


        //cek validasi
        $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        //save ke db pesanan
        if(empty($cek_pesanan))
        {
        $pesanan = new Pesanan;
        $pesanan->user_id = Auth::user()->id;
        $pesanan->tanggal = $tanggal;
        $pesanan->status = 0;
        $pesanan->jumlah_harga = 0;
        $pesanan->kode = mt_rand(1000,9999); 
        $pesanan->save();
        }



        //save ke db pesanan detail
        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        //cek pesanan detail
        $cek_pesanan_detail = PesananDetail::where('barang_id', $barangs->id)->where('pesan_id', $pesanan_baru->id)->first();
        if(empty($cek_pesanan_detail))
        {
            $pesanan_detail = new PesananDetail;
            $pesanan_detail->barang_id = $barangs->id;
            $pesanan_detail->pesan_id =  $pesanan_baru->id;
            $pesanan_detail->jumlah =  $request->jumlah_pesan;
            $pesanan_detail->jumlah_harga =  $barangs->harga*$request->jumlah_pesan;
            $pesanan_detail->save();
        } else {
            $pesanan_detail = PesananDetail::where('barang_id', $barangs->id)->where('pesan_id', $pesanan_baru->id)->first();
            $pesanan_detail->jumlah =  $pesanan_detail->jumlah+$request->jumlah_pesan;

            $harga_pesanan_detail_baru = $barangs->harga*$request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
            $pesanan_detail->update();
        }

        //total jumlah
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga+$barangs->harga*$request->jumlah_pesan;
        $pesanan->update();

        //SweetAlert::success('Success Message', 'Optional Title');
        return redirect('check-out');
    }

    public function check_out()
    {
        //$barangs = Barang::all();
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
     if(!empty($pesanan)){
         $pesanan_details = PesananDetail::where('pesan_id', $pesanan->id)->get();
         return view('order.check_out', compact('pesanan', 'pesanan_details'));
     
     }
            
        
       // $pesanan_details = PesananDetail::where('pesan_id', $pesanan)->get();

    }

    public function delete($id)
    {
        $pesanan_detail = PesananDetail::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->pesan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();


        $pesanan_detail->delete();
        return redirect('check-out');
    }

    public function konfirmasi()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        $pesan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();
    
        $pesanan_details = PesananDetail::where('pesan_id', $pesan_id)->get();
        foreach( $pesanan_details as $pesanan_detail )
        {
            $barangs = Barang::where('id', $pesanan_detail->barang_id)->first();
            $barangs->stock = $barangs->stock-$pesanan_detail->jumlah;
            $barangs->update();
        } 

        return view('order.confirm');

    }

    /*public function confirmation()
    {
        $user = User::where('id', Auth::user()->id)->first();

        //$pesanan_details = PesananDetail::where('pesan_id', $pesanan->id)->get();
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        $pesan_id = $pesanan->id;

        $pesanan_details = PesananDetail::where('pesan_id', $pesan_id)->get();
        
        $pesanan->status = 1;
        $pesanan->update();

        foreach( $pesanan_details as $pesanan_detail )
        {
            $barangs = Barang::where('id', $pesanan_detail->barang_id)->first();
            $barangs->stock = $barangs->stock-$pesanan_detail->jumlah;
            $barangs->update();
        } 

        return redirect('check-out');
    } */
}
