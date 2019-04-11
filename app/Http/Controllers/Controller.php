<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage(){
        $titulo = 'Sistema de Gestão para Grupo de Investimento';
        return view('welcome', [
            'title'=>$titulo
        ]);
    }
    public function cadastrar(){
        echo 'Mensagem da tela de cadastro';
    }

    /**
     * Method to user auth VIEW
     * ====================================================================================
     */
    public function fazerlogin(){
        return view('user.login');        
    }
}
