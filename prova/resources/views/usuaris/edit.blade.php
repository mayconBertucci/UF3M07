@extends('layouts.plantilla')
@section('contingut')
<h3>Editar producte</h3>
<form method="POST" action="{{ url('/usuaris/update', $usuari->id) }}">
	@csrf
	Nom: <input type="text" name="nom" value="{{ $usuari->name }}"><br> 
	E-mail: <input type="email" name="email" value="{{ $usuari->email }}" ><br>
	Password: <input type="password" name="password"><br>
	<input type="submit" name="alta" value="Actualitzar">
</form>
<ul>
@foreach($errors->all() as $message)
	<li>{{ $message }}</li>
@endforeach
</ul>
@endsection
