<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // metodo a ser chamado
    public function cliente(){
        return "meu clientin";
    }


    public function show($id){
        return "É o ID do Show: ".$id;
    }

}
