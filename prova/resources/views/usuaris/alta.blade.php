@extends('layouts.plantilla')
@section('contingut')
<h3>Alta Usuari</h3>
<form method="POST" action="{{ url('/usuaris/guardar') }}">
	@csrf
	Nom: <input type="text" name="nom" value="{{ old('name') }}"><br>
	E-mail: <input type="email" name="email" value="{{ old('email') }}"><br>
	Password: <input type="password" name="password" value="{{ old('password') }}"><br>
	<input type="submit" name="alta" value="Desar">
</form>
<ul>
@foreach($errors->all() as $message)
	<li>{{ $message }}</li>
@endforeach
</ul>
@endsection
