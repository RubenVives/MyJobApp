<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Usuarios;
use Facade\FlareClient\Http\Response;

class UsuariosController extends Controller
{
    //
    protected $UsuarioModel;

    public function __construct()
    {
        $this->UsuarioModel = Usuarios::class;
    }

    public function loginUsuario(Request $request)
    {

        $array = [
            "name" => "ruben",
            "apellidos" => "vives"
        ];
        //$data = response()->json($request->all());
        return Response()->json(json_encode($array));
    }
}
