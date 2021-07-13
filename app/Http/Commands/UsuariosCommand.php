<?php

/**
 * Fichero UsuariosCommand.php
 * 
 * Utilizados para la logica de los procesos, paso intermedio entre controlador y repositorio ("BDD")
 */

namespace App\Http\Commands;

use App\UsuariosModel;
use App\Http\Repository\UsuariosRepository;

class UsuariosCommand
{
    protected $usuariosModel;
    protected $usuariosRepository;

    public function __construct(UsuariosModel $UsuariosModel, UsuariosRepository $usuariosRepository)
    {
        $this->usuariosModel = $UsuariosModel;
        $this->usuariosRepository = $usuariosRepository;
    }

    public function AltaUsuariosRepository($datos)
    {
        # code...
    }
}
