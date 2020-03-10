<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="{{ url('/') }}">Home</a>
	<a href="{{ url('productes') }}">Productes</a>
	<a href="{{ url('usuaris') }}">Usuaris</a>

	@yield('contingut')

