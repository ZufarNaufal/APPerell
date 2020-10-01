@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-12 mt-2">
    <a href="{{ url('home') }}" class="btn btn-success">Back To Home</a></div>
    <div class="col-md-12 mt-3">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $barangs->nama_barang }}</li>
  </ol>
</nav>
    </div>
        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-header">
                    <div class="col-sm-4">
                        <h2>Pesan</h2>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('uploads') }}/{{ $barangs->gambar }}" class="rounded mx-auto d-block" width="500" alt="">
                        </div>
                        <div class="col-md-6">
                        <h2> Nama Barang </h2><h3>{{ $barangs->nama_barang }}</h3> <hr>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><h3>Harga :</h3></td>
                                    <td><h3>Rp. {{ number_format($barangs->harga) }}</h3></td>
                                </tr>
                                <tr>
                                    <td><h3>Stock :</h3></td>
                                    <td><h3> {{ number_format($barangs->stock) }}</h3></td>
                                </tr>
                                <tr>
                                    <td><h4>Keterangan :</h4></td>
                                    
                                    <td><h4> {{ $barangs->keterangan }}</h4></td>
                                </tr>
                                <!--<form action="" method="POST">-->
                                <tr>
                                    <td> Jumlah Pesanan</td>
                                    <td>
                                        <form method="post" action="{{ url('order/pesan') }}/{{ $barangs->id }}" >
                                            @csrf
                                        <input type="text" name="jumlah_pesan" class="form-control" required="">
                                        <button type="submit" class="btn btn-primary mt-3"><i class="fa fa-shopping-cart"></i> Save To Cart</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
