<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function listar(){
        $array = [
            "nome" => "Nome Teste"
        ];
        return response()->json(data: $array, status:200);
    }
}
