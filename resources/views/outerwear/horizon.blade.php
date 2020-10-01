<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name') }}</title>
  <link href="../RTX/mtl/dist/css/materialize.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>


<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper deep-purple">
    <a href="#" class="brand-logo center"><i class="material-icons">shop</i>{{ config('app.name') }}</a>
     <ul id="navbar-items" class="right hide-on-med-and-down">
        <li>{{ Auth::user()->name }}</li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>
      <ul id="dropdown-menu" class="dropdown-content">
        <li><a href="">a</a></li>
        <li><a href="">a</a></li>
        <li class="divider"></li>
        <li><a href="">a</a></li>
      </ul>
    </div>
  </nav>
  </div>


<div class="container">
  @foreach($barangs as $barang)
  <div class="row">
    <div class="col m6">
      <div class="card">
        <div class="card-image">
          <img src="{{ url('uploads') }}/{{ $barang->gambar}}">
        </div>
        <div class="card-content">
          <p><h3>{{ $barang->nama_barang }}</h3></p>
          <p><strong><hr><h4> Harga :</strong> {{ number_format ($barang->harga) }}</h4>
          <strong>Stock :</strong> {{ $barang->stock }} <br>
          <hr>
          <strong>Keterangan : </strong> <br>
          {{ $barang->keterangan }}
        </p>
        </div>
        <div class="card-action">
        <a class="btn-floating btn-large waves-effect waves-light red" href="{{ url('order/pesan') }}/{{ $barang->id}}"><i class="material-icons">shopping_cart</i></a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  
  <div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">mode_edit</i>
  </a>
  <ul>
    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
    <li><a class="btn-floating yellow darken-1" href="{{ url('check-out') }}"><i class="material-icons">shopping_cart</i></a></li>
    <li><a class="btn-floating green" href="{{ url('user/prfle_user')}}"><i class="material-icons">person</i></a></li>
    <li><a class="btn-floating blue" href="{{ url('home')}}"><i class="material-icons">home</i></a></li>
  </ul>
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../RTX/mtl/dist/js/materialize.js"></script>
    <script type="text/javascript">
     $( document ).ready(function() {

$('.collapsible').collapsible({
  onOpenEnd: function(el) {
    console.log("OPEN", el);
    var carousel = $(el).find('.carousel');
    carousel.carousel();
  }
});

$('ul.tabs').tabs({
  onShow: function(tab) {
    $('.carousel.carousel-slider').carousel({fullWidth : true});
  }
});

$('.carousel').carousel();
$('.carousel.carousel-slider').carousel({fullWidth : true});

});

$(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });

    </script>
</body>
</html>