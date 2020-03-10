<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productsController extends Controller
{
    //
    public function llistat() {
    	$productes = Product::all();
    	return view('productes.llistat', ['productes' => $productes]);
    }

    public function formAdd() {
    	return view ('productes.alta');
    }

    public function add(Request $request) {
    	$nom = $request->nom;
    	$preu = $request->preu;
    	$descripcio = $request->descripcio;

        $request->validate([
            'nom'=>'required',
            'preu'=>'required|numeric',
            'descripcio'=>'required',
        ]);

    	$producte = new Product;
    	$producte->nom = $nom;
    	$producte->preu = $preu;
    	$producte->descripcio = $descripcio;
    	$producte->save();

    	return redirect('/productes')->with('status', 'Alta correcta');
    }

    public function delete($id) {
    	$producte = Product::findOrFail($id);
    	$producte ->delete();

    	return redirect('/productes')->with('status', 'Producte esborrat');
    }

    public function formUpdate($id) {
    	$producte = Product::findOrFail($id);
    	return view ('productes.edit', ['producte' => $producte]);
    }

    public function update(Request $request, $id) {
    	$producte = Product::findOrFail($id);
    	$nom = $request->nom;
    	$preu = $request->preu;
    	$descripcio = $request->descripcio;

        $request->validate([
            'nom'=>'required',
            'preu'=>'required|numeric',
            'descripcio'=>'required',
        ]);

    	$producte->nom = $nom;
    	$producte->preu = $preu;
    	$producte->descripcio = $descripcio;
    	$producte->save();

    	return redirect('/productes')->with('status', 'Producte actualitzat');
    }

}
