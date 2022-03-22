<?php

namespace App\Http\Controllers;

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

    
}
