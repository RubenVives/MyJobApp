<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Usuarios;

class UsuariosController extends Controller
{
    //
    protected $UsuarioModel;
    
    public function __construct()
    {
        $this->UsuarioModel = Usuarios::class;  
    }

    public function loginUsuario(Request $request){
        die('hola');
        $array = [
            "name" => "ruben",
            "apellidos" => "vives"
        ];
        $data = response()->json($request->all());
        die($data);
        return Request()->json($array);
    }
}
