<?php

namespace App\Http\Controllers;

use App\Message;
use App\MessageCategory;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $depoimentos = Message::all(['message', 'nome'])->where('categoryId', 4)->paginate(4);

        $duvidas = Message::all(['message', 'resposta'])->where('permissao_publica', true);

        if(Message::where('permissao_publica', true)->sum('id') > 0 && Message::where('respondida', true)->sum('id') > 0) {
            $emptyduvidas = false;
        } else {
            $emptyduvidas = true;
        }

        return view('index', ['duvidas'=>$duvidas, 'emptyduvidas'=>$emptyduvidas]);
    }

    public function sobre()
    {
        return view('sobre');
    }

    public function contatos()
    {
        $messageCategories = MessageCategory::all();

        return view('contatos', ['messageCategories'=>$messageCategories]);
    }
}
