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
<div class="container mt-5">
    <div class="card">
    <div class="col-md-6">
        <div class="card-body">
        Pesanan Anda Telah Diproses, Silahkan transfer ke Rekening yang terdapat pada table di bawah ini 
        </div>
        <table class="responsive-table">
        <thead>
          <tr>
              <th>Name</th>
              <th>Vendor</th>
              <th>Rekening</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><img src="../uploads/paypal.png"></td>
            <td>PayPal</td>
            <td>111-11-00</td>
          </tr>
          <tr>
            <td><img src="../uploads/bca.png"></td>
            <td>Bank BCA</td>
            <td>222-22-00</td>
          </tr>
          <tr>
            <td><img src="../uploads/mandiri.png"></td>
            <td>Bank Mandiri</td>
            <td>333-33-00</td>
          </tr>
        </tbody>
      </table>
        </div>
    </div>
    <div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">list</i>
  </a>
  <ul>
    <li><a class="btn-floating blue" href="{{ url('home')}}"><i class="material-icons">home</i></a></li>
  </ul>
</div>
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