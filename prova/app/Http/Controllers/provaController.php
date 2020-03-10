<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class provaController extends Controller
{
	public function hola() {
    	echo 'Provant metode en controlador';
	}

	public function saluda($usuari) {
    	return view('hola', ['usuari' => $usuari]);
	}

	public function producte($codi=null) {
		return "hola! has posat ".$codi;
	}
}
