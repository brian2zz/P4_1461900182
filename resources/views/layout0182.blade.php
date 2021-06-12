<!DOCTYPE html>
<html lang="en">
<head>
	<title>Praktikum</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">Praktikum Pertemuan 4</h1>
		<h3 class="deskripsi">Febriansyah Dwi Kurnia Wicaksono (1461900182)</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="/">Buku</a></li>
			<li><a href="/user">User</a></li>
			<li><a href="/about">About</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	@yield('badan')
 
	</div>
</div>
</body>
</html>