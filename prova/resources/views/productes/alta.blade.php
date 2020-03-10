@extends('layouts.plantilla')
@section('contingut')
<h3>Alta producte</h3>
<form method="POST" action="{{ url('/productes/guardar') }}">
	@csrf
	Nom: <input type="text" name="nom" value="{{ old('nom') }}"><br>
	Preu: <input type="text" name="preu" value="{{ old('preu') }}"><br>
	Descripció: <input type="text" name="descripcio" value="{{ old('descripcio') }}"><br>
	<input type="submit" name="alta" value="Desar">
</form>
<ul>
@foreach($errors->all() as $message)
	<li>{{ $message }}</li>
@endforeach
</ul>
@endsection
