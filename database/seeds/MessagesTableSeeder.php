<?php

use App\Message;
use App\MessageCategory;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::truncate();

        $depoimento = MessageCategory::where('nome', 'Depoimento')->first();
        $duvida = MessageCategory::where('nome', 'Duvida')->first();
        $sugestao = MessageCategory::where('nome', 'Sugestão')->first();
        $critica = MessageCategory::where('nome', 'Critica')->first();

        Message::create([
            'nome'=>"Christian",
            'emailEmissor'=>"Christianferreira652@gmail.com",
            'message'=>"bem eu gostei bastante da clinica e aprovo bastante todos os serviços , em especial o de fisioterapia",
            'categoryId'=>$depoimento->id
        ]);

        Message::create([
            'nome'=>"Christian",
            'emailEmissor'=>"Christianferreira652@gmail.com",
            'message'=>"bem eu gostei bastante da clinica e aprovo bastante todos os serviços , em especial o de cardiologia",
            'categoryId'=>$depoimento->id
        ]);

        Message::create([
            'nome'=>"Christian",
            'emailEmissor'=>"Christianferreira652@gmail.com",
            'message'=>"bem eu gostei bastante da clinica e aprovo bastante todos os serviços , em especial o de odontologia",
            'categoryId'=>$depoimento->id
        ]);

        Message::create([
            'nome'=>"Christian",
            'emailEmissor'=>"Christianferreira652@gmail.com",
            'message'=>"bem eu gostei bastante da clinica e aprovo bastante todos os serviços , em especial o de pediatria",
            'categoryId'=>$depoimento->id
        ]);

        Message::create([
            'nome'=>"Christian",
            'emailEmissor'=>"Christianferreira652@gmail.com",
            'message'=>"quanto tempo vocês trabalham?",
            'categoryId'=>$duvida->id
        ]);

        Message::create([
            'nome'=>"Christian",
            'emailEmissor'=>"Christianferreira652@gmail.com",
            'message'=>"não gostei do atendimento ao cliente por telemarketing , são muito apressados!",
            'categoryId'=>$critica->id
        ]);

        Message::create([
            'nome'=>"Christian",
            'emailEmissor'=>"Christianferreira652@gmail.com",
            'message'=>"tentem adicionar serviços direcionados aos mais velhos",
            'categoryId'=>$sugestao->id
        ]);
    }
}
