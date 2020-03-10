@extends('layouts.plantilla')
@section('contingut')
	<h3>Llistat Usuaris</h3>
	<a href="{{ url('/usuaris/afegir') }}">Afegir usuari</a>
	<table>
		<tr>
			<td>Nom</td>
			<td>E-mail</td>
			<td>Password</td>
			<td>Operacions</td>
		</tr>	 
		@foreach ($usuaris as $usuari) 
			<tr>
	    		<td>{{ $usuari->id }}</td>
	    		<td>{{ $usuari->name }}</td>
	    		<td>{{ $usuari->email }}</td>
	    		<td>{{ $usuari->password }}</td>
	    		<td><a href="{{ url('/usuaris/esborrar', $usuari->id) }}">Esborrar</a></td>
	    		<td><a href="{{ url('/usuaris/edit', $usuari->id) }}">Editar</a></td>
    		</tr>
	    @endforeach
	</table>
	@if(session('status'))
		{{ session('status') }}
	@endif
@endsection
</body>
</html>