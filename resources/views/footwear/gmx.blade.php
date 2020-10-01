<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}}</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
 
    <link rel="stylesheet" href="../vendor/bootstrap/dist/css/bootstrap.css">
</head>
<body>
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Collapsed content</h5>
      <span class="text-muted">Toggleable via the navbar brand.</span>
      <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
             Logout
        </a>
    </div>
  </div>
  <nav class="navbar navbar-light" style="background-color: #f9da57;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ route('home') }}"><i class="fas fa-home"></i></a>
    <?php 
        $pesanan_utama = \App\Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if(!empty($pesanan_utama))
        {
          $notif = \App\PesananDetail::where('pesan_id', $pesanan_utama->id)->count();
        }
      ?>
    <a class="navbar-brand" href="{{ url('check-out') }}"><i class="fas fa-shopping-cart"></i>
    @if(!empty($notif))
    <span class="badge badge-pill badge-danger">{{ $notif }}</span>
    @endif
</a>
    
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  What's New
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Available On August 21</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Vans X Toy Story is Available on store in August 21  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </nav>
</div>
<div class="container mt-5">
  <div class="col-md-auto">
  <div id="Carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
    <li data-target="#Carousel" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="#">
      <img src="../uploads/gmx2.jpg" class="d-block w-100" alt="...">
      </a>
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:Black;"><b>Geof Max Classic Navy Blue</b></h5>
        <p style="color:Black;">IDR 300,000</p>
      </div>
    </div>
    <div class="carousel-item">
      <a href="#">
      <img src="../uploads/gmx1.jpg" class="d-block w-100" alt="...">
      </a>
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:Black;"><b>Geof Max Classic Black/Brown</b></h5>
        <p style="color:Black;">IDR 600,000</p>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12 mb-5">
      <img src="#" class="rounded mx-auto d-block" width="700" alt="">
    </div>
    @foreach($barangs as $barang)
    <div class="col-md-4">
      <div class="card">
        <img src="{{ url('uploads') }}/{{ $barang->gambar}}" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">{{ $barang->nama_barang}}</h5>
          <p class="card-text">
            <strong> Harga : </strong> Rp. {{ number_format($barang->harga)}} <br>
            <strong>Stock :</strong> {{ $barang->stock}} <br>
            <hr>
            <strong>Keterangan :</strong> <br>
            {{ $barang->keterangan}}
          </p>
          <a href="{{ url('order/pesan') }}/{{ $barang->id}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Pesan</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>