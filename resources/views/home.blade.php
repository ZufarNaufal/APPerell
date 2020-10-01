<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="../vendor/materialize/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    
</head>
<body>
<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper deep-purple">
      <a href="#" class="brand-logo center">{{ config('app.name') }}</a>
          <!-- Dropdown Trigger -->
  <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>About</a>

<!-- Dropdown Structure -->
<ul id='dropdown1' class='dropdown-content'>
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider" tabindex="-1"></li>
  <li><a href="#!">three</a></li>
  <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
</ul>
      <ul id="navbar-items" class="right hide-on-med-and-down">
        <li><a href="">Home</a></li>
        <li>{{ Auth::user()->name }}</li>
      <ul id="dropdown-menu" class="dropdown-content">
        <li><a href="">a</a></li>
        <li><a href="">a</a></li>
        <li class="divider"></li>
        <li><a href="">a</a></li>
      </ul>
    </div>

  </nav>
  </div>
<div class="container mt-5">
  <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div> -->

        <div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">list</i>
  </a>
  <ul>
    <li><a class="btn-floating red" href="{{ url('history')}}"><i class="material-icons">history</i></a></li>
    <li><a class="btn-floating yellow darken-1" href="{{ url('user/prfle_user') }}"><i class="material-icons">account_circle</i></a></li>
    <li><a class="btn-floating green" href="{{ url('check-out') }}"><i class="material-icons">add_shopping_cart</i></a></li>
    <li><a class="btn-floating green" href="{{ url('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i></a></li>
  </ul>
</div>
<div class="container">
<label><h2><center>Upcoming Item</center></h2></label>
  <div class="col s2 m6">
      <div class="carousel carousel-slider" width="100">
        <a class="carousel-item"><img src="../RTX/img/footwear/vans/valien.jpg"></a>
        <a class="carousel-item"><img src="../RTX/img/footwear/vans/vtbuzz.jpg"></a>
</div>
</div>
<!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Read This</a>

<!-- Modal Structure -->
<div id="modal1" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h3>- VANS X TOY STORY</h3>
    <h5>Vans celebrated the original characters from the animated film Toy Story in its  Disney•Pixar Toy Story collection . Vans showcased Andy’s favorite toys across an extensive assortment of adult and kids footwear as well as apparel and accessories.</h5>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">close</a>
  </div>
</div>
</div>
        <label><strong><h1>Outerwear</strong></h1></label>
        <div class="row">
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="../uploads/horizonspply.jpg">
          <span class="card-title"></span>
        </div>
        <div class="card-content">
        <h4>Horizon Supply.Co</h4>
          <a class="waves-effect waves-light btn-small" href="{{ url('outerwear/horizon') }}">See Catalog</a>
        </div>
      </div>
    </div>
    
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="../uploads/ddlogo.jpg">
          <span class="card-title"></span>
        </div>
        <div class="card-content">
          <h4>dropdead</h4>
          <a class="waves-effect waves-light btn-small" href="{{ url('outerwear/dropdead') }}">See Catalog</a>
        </div>
      </div>
    </div>
    <div class="col s10 m4">
      <div class="card">
        <div class="card-image">
          <img src="../RTX/img/tenue.png">
          <span class="card-title"></span>
        </div>
        <div class="card-content">
          <h4>Tenue De Attire</h4>
          <a class="waves-effect waves-light btn-small" href="{{ url('outerwear/tenue') }}">See Catalog</a>
        </div>
      </div>
    </div>
  </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     {{ csrf_field() }}
     </form>
     
  <label><strong><h1>Footwear</strong></h1></label>
        <div class="row">
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="../RTX/img/vans.png">
          <span class="card-title"></span>
        </div>
        <div class="card-content">
          <a class="waves-effect waves-light btn-small" href="{{ url('footwear/vans')}}">See Catalog</a>
        </div>
      </div>
    </div>
    
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="../RTX/img/piero.gif">
          <span class="card-title"></span>
        </div>
        <div class="card-content">
        <a class="waves-effect waves-light btn-small" href="{{ url('footwear/piero')}}">See Catalog</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="../RTX/img/gmx.png">
          <span class="card-title"></span>
        </div>
        <div class="card-content">
        <a class="waves-effect waves-light btn-small" href="{{ url('footwear/gmx')}}">See Catalog</a>
        </div>
      </div>
    </div>
  </div>
    
  <footer class="page-footer">
  <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">RTX - CLOTH </h5>
                <p class="grey-text text-lighten-4">Autorizhed Retail</p>
              </div>
              <div class="col 8 offset-4 m12">
                <h5 class="white-text">Contributor</h5>
                  <a class="grey-text text-lighten-3">Zufar Mahasin Naufal </a>
                  <a class="grey-text text-lighten-3">Ananda Reynata S </a>
                  <a class="grey-text text-lighten-3">Heru Purnama</a>
                  <a class="grey-text text-lighten-3">Fambudi Rachdian</a>
              </div>
            </div>
          </div>
  <div class="footer-copyright">
            <div class="container">
            © 2020 Developed By RTX - FALL
            </div>
          </div>
          </div>
        </footer>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="../RTX/js/custom.js"></script>
    <script src="../vendor/materialize/js/materialize.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>-->
  <script>
    
$('.carousel').carousel();
$('.carousel.carousel-slider').carousel({fullWidth : false});

$(document).ready(function(){
    $('.modal').modal();
  });

    $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });

  // Or with jQuery

  $('.dropdown-trigger').dropdown()
  </script>
</body>
</html>

