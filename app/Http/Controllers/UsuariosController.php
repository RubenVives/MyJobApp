<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\UsuariosModel;
use Facade\FlareClient\Http\Response;

class UsuariosController extends Controller
{
    //
    protected $UsuarioModel;

    public function __construct(UsuariosModel $UsuarioModel)
    {
        $this->UsuarioModel = $UsuarioModel;
    }

    public function loginUsuario(Request $request)
    {
        die('$this->UsuarioModel');
        $array = [
            "name" => "ruben",
            "apellidos" => "vives"
        ];
        //$data = response()->json($request->all());
        return Response()->json(json_encode($array));
    }
}
