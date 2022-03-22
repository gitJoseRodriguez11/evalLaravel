<?php

namespace App\Http\Controllers;

use App\Alumno;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
    public function hola(){
        return view('hola');
    }

    public function welcome(){
        return view('welcome');
    }

    public function api1(){
       $client = new Client([
           'base_uri' => 'https://jsonplaceholder.typicode.com',
           'timeout' => 2.0
       ]);

       $response = $client->request('GET','posts');
       dd($response);
    }

    public function buscar(Request $request)
{   
    if($request->ajax()){
        return Alumno::where('user_id', auth()->id())->get();
    }else{
        return view('home');
    }
}  

public function guardar(Request $request)
{
    $nota = new Alumno();
    $nota->nombre = $request->nombre;
    $nota->descripcion = $request->descripcion;
    $nota->user_id = auth()->id();
    $nota->save();

    return $nota;
}  

public function update(Request $request, $id)
{
    $nota = Alumno::find($id);
    $nota->nombre = $request->nombre;
    $nota->descripcion = $request->descripcion;
    $nota->save();
    return $nota;
}


public function destroy($id)
{
    $nota = Alumno::find($id);
    $nota->delete();
}

    
}
