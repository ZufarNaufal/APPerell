
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../collabs/web/styleC.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Checkout</title>
  </head>
  <span><h1><center>RTX - CLOTH</center></h1></span>
<div class="container mt-5">
    <div class="row">
    <div class="col-sm-4 mt-2">
    <a href="{{ url('home') }}" class="btn btn-success">Back To Home</a></div>
    <div class="col-md-12 mt-3">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">History Pemesanan</li>
  </ol>
</nav>
    </div>
        <div class="col-sm-12">
            <div class="card">
            <div class="card-body">
                   <h3><i class="fa fa-history"></i>Riwayat Pemesanan</h3>
                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>tanggal</th>
                                <th>status</th>
                                <th>jumlah harga</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1; ?>
                        @foreach($pesanans as $pesanan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan->tanggal }}</td>
                                <td> 
                                    @if($pesanan->status == 1)
                                    Sudah Pesan & Belum Bayar
                                    @else
                                    Sudah Bayar
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($pesanan->jumlah_harga+$pesanan->kode) }}</td>
                                <td><a href="{{ url('history') }}/{{ $pesanan->id}}" class="btn btn-success">
                                <i class="fa fa-info">  Detail</i>
                                </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                 </div>
             </div>
                    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
