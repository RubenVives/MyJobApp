<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsuariosModel;
use Facade\FlareClient\Http\Response;
use App\Http\Commands\UsuariosCommand;

use Faker\Provider\es_ES\PhoneNumber;
use Faker\Generator as Faker;

class UsuariosController extends Controller
{
    //
    protected $UsuarioModel;
    protected $UsuariosCommand;

    public function __construct(UsuariosModel $UsuarioModel,UsuariosCommand $UsuariosCommand )
    {
        
        $this->UsuarioModel = $UsuarioModel;
        $this->UsuariosCommand = $UsuariosCommand;
    }

    public function loginUsuario(Request $request, Faker $faker, PhoneNumber $phoneNumber)
    {
        $number = $phoneNumber->phoneNumber();
        die($number);
        $dato = $this->UsuariosCommand->AltaUsuarios('AltaUsuariosRepository');
        die($dato);
        $array = [
            "name" => "ruben",
            "apellidos" => "vives"
        ];
        //$data = response()->json($request->all());
        return Response()->json(json_encode($array));
    }
}
