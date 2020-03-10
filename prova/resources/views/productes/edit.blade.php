@extends('layouts.plantilla')
@section('contingut')
<h3>Editar producte</h3>
<form method="POST" action="{{ url('/productes/update', $producte->id) }}">
	@csrf
	Nom: <input type="text" name="nom" value="{{ $producte->nom }}"><br> 
	Preu: <input type="text" name="preu" value="{{ $producte->preu }}" ><br>
	Descripció: <input type="text" name="descripcio" value="{{ $producte->descripcio }}" ><br>
	<input type="submit" name="alta" value="Actualitzar">
</form>
<ul>
@foreach($errors->all() as $message)
	<li>{{ $message }}</li>
@endforeach
</ul>
@endsection
