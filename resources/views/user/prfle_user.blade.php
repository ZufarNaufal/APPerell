<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ config('app.name')}}</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../RTX/css/custom.css">
    <script src="https://kit.fontawesome.com/81c2c05f29.js" crossorigin="anonymous"></script>
</head>
<body> <!--
<div class="wrapper">
			<div class="card">
				<div class="card-header">
				@foreach($users as $user)
				<div class="card-body">
				@endforeach
					<h1>{{ $user->name }}</h1>
					<hr><br>EMAIL</br></hr>
		
					<p>
						{{ $user->email }}
					</p>
					<p>
						 {{ $user->alamat }}
					</p>
					<p>
						{{ $user->nohp }}
					</p>
				</div>
			</div>
		</div> -->
		<div class="container">
		<div class="row">
		<form action="{{ url('user/prfle_user')}}" class="form-inline" method="GET">
		<div class="form-group mx-sm-3 mb-2">
			<input name="keyword" type="text" class="form-control" placeholder="Search data">
		</div>
  <button type="submit" class="btn btn-primary mb-2">Search</button>
</form>
		</div>
		@if(session()->has('notif'))          
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                        &times;</button><strong><h5>Your Data Has been Edited</strong></h5></div>
                                @endif
		<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
	  <th scope="col">Address</th>
	  <th scope="col">Phone Number</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($users as $user)
  <tbody>
    <tr>
      <th scope="row">{{ $user->id}}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
	  <td>{{ $user->alamat }}</td>
	  <td>{{ $user->nohp }}</td>
      <td>
		  <a href="{{ url('user/prfle_user')}}/{{ $user->id }}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</a>
		</td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
		<div class="navigation open">
			<div class="trigger"><i class="fas fa-chevron-left trigger-icon"></i></div>

			<ul class="nav-list">
				
			<li class="nav-item">
						<br>
						<i class="fas fa-user icon"></i>
						</br>
						<span class="label">{{ Auth::user()->name }}</span>
				</li>
				<li class="nav-item">
					<a href="{{ route('home')}}" class="link">
						<br>
						<i class="fas fa-home icon"></i>
						</br>
						<span class="label">Home</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ url('profile') }}" class="link">
						<br>
						<i class="fas fa-edit icon"></i>
						</br>
						<span class="label">Edit</span>
					</a>
				</li>
			</ul>
		</div>
		<script src="../RTX/js/custom.js"></script>
    
</body>
</html>