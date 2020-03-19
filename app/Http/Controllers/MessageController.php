<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();

        return view('Secretario.mensagens', ['messages'=>$messages]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = new Message();
        $message->categoryId = $request->categoryId;
        $message->message = $request->message;
        $message->emailEmissor = $request->emailEmissor;
        $message->nome = $request->nome;

        $message->save();

        return redirect()->route('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        return view()->with(['message'=>$message]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        $message->resposta = $request->resposta;
        $message->respondida = true;
        $message->save();
        
        return redirect()->route('manager.messages.index');
    }

    public function bePublic(Message $message)
    {
        if ($message->permissao_publica !== true) {
            $message->permissao_publica = true;
            $message->save();
        }

        return redirect()->route('manager.messages.index');
    }

    public function bePrivate(Message $message)
    {
        if ($message->permissao_publica == true) {
            $message->permissao_publica = false;
            $message->save();
        }

        return redirect()->route('manager.messages.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->route('manager.messages.index');
    }
}
