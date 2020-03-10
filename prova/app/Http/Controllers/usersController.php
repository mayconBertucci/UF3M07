<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    //
     public function llistat() {
    	$usuaris = User::all();
    	return view('usuaris.llistat', ['usuaris' => $usuaris]);
    }

    public function formAdd() {
    	return view ('usuaris.alta');
    }

    public function add(Request $request) {
    	$nom = $request->nom;
    	$email = $request->email;
    	$password = $request->password;

        $request->validate([
            'nom'=>'required|unique:users,name',
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);

    	$usuari = new User;
    	$usuari->name = $nom;
    	$usuari->email = $email;
    	$usuari->password = Hash::make($password);
    	$usuari->save();

    	return redirect('/usuaris')->with('status', 'Alta correcta');
    }

    public function delete($id) {
    	$usuari = User::findOrFail($id);  
    	$usuari ->delete();

    	return redirect('/usuaris')->with('status', 'Usuari esborrat');
    }

    public function formUpdate($id) {
    	$usuari = User::findOrFail($id);
    	return view ('usuaris.edit', ['usuari' => $usuari]);
    }

    public function update(Request $request, $id) {
    	$usuaris = User::findOrFail($id);
    	$nom = $request->nom;
    	$email = $request->email;
        $password = $request->password;

        $request->validate([
            'nom'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);

    	$usuaris->name = $nom;
    	$usuaris->email = $email;
        if ($password != "") $usuaris->password = Hash::make($password);
    	$usuaris->save();

    	return redirect('/usuaris')->with('status', 'Usuari actualitzat');
    }
}
