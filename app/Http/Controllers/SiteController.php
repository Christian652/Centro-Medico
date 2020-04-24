<?php

namespace App\Http\Controllers;

use App\Especialidade;
use App\Message;
use App\MessageCategory;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $duvidas = Message::all()->where('respondida', true)->where('permissao_publica', true);
        $depoimentos = Message::all()->where('categoryId', 4)->where('permissao_publica', true);

        if(Message::where('permissao_publica', true)->where('respondida', true)->sum('id') > 0) {
            $emptyduvidas = false;
        } else {
            $emptyduvidas = true;
        }

        if(Message::where('categoryId', 4)->where('permissao_publica', true)->sum('id') > 0) {
            $emptydepoimentos = false;
        } else {
            $emptydepoimentos = true;
        }

        $especialidades = Especialidade::all();

        return view('index', [
            'duvidas'=>$duvidas, 
            'emptyduvidas'=>$emptyduvidas, 
            'emptydepoimentos'=>$emptydepoimentos, 
            'depoimentos'=>$depoimentos,
            'especialidades'=>$especialidades
        ]);
    }

    public function sobre()
    {
        $especialidades = Especialidade::all();

        return view('sobre', ['especialidades'=>$especialidades]);
    }

    public function contatos()
    {
        $messageCategories = MessageCategory::all();
        $especialidades = Especialidade::all();

        return view('contatos', ['messageCategories'=>$messageCategories, 'especialidades'=>$especialidades]);
    }

    public function categoriaDeConsulta(Especialidade $especialidade)
    {
        $especialidades = Especialidade::all();

        return view('categoriaDeConsulta', ['especialidades'=>$especialidades, 'especialidade'=>$especialidade]);
    }
}
