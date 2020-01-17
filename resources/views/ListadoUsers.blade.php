<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>usuarios</title>
</head>
<body>
@foreach ($users as $user)
	{{-- expr --}}

<div class="card text-center">
	<img class="card-img-top" src="..." alt="Card image cap">
	<div class="card-body">
		<h4 class="card-title">{{ $user->name }}</h4>
		<p class="card-text">{{ $user->email }}</p>
		<a href="#" class="btn btn-primary"></a>
		<p>{{ $user->password}}</p>
	</div>
</div>

@endforeach


	
</body>
</html>