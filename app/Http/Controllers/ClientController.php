<?php

namespace App\Http\Controllers;
use App\Client;
use Laravel\Lumen\Routing\Controller as BaseController;

class ClientController extends BaseController
{
 
    public function index() {
        
        return Client::all();
    }
    
    public function show($id) {
        //buscar por id da coleção de dados
        return Client::find($id);
        
    }
}
