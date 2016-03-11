<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ambientesController extends Controller
{
    public function index()
    {
    	return "ambientesController";
    }

     public function show(Request $request)
    {
    	return $request->nombre;
    	//return $request->all();
    }

    public function store(Request $request)
    {
    	//return $request->all();

    	$usuario = \DB::table('usuario')->insert([

    		'nombre' 	=> $request->nombre,
    		'nick' 		=> $request->nick,
    		'email' 	=> $request->email,
    		'password' 	=> $request->password,
    		'telefono' 	=> $request->telefono

    		]);
    	return $usuario;
    }

}
