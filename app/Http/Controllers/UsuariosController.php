<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuariosModel;
use Facade\FlareClient\Http\Response;
use App\Http\Commands\UsuariosCommand;

class UsuariosController extends Controller
{
    //
    protected $UsuarioModel;
    protected $UsuariosCommand;

    public function __construct(UsuariosModel $UsuarioModel, UsuariosCommand $UsuariosCommand)
    {

        $this->UsuarioModel = $UsuarioModel;
        $this->UsuariosCommand = $UsuariosCommand;
    }

    public function loginUsuario(Request $request)
    {
        die('hola');
        $dato = $this->UsuariosCommand->AltaUsuarios('AltaUsuariosRepository');
        $array = [
            "name" => "ruben",
            "apellidos" => "vives"
        ];
        //$data = response()->json($request->all());
        return Response()->json(json_encode($array));
    }
}
