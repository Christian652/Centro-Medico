@extends('layouts.site')

@section('titulo')
    Contato Com A Centro Medico
@endsection

@section('content')

<section class="container">
        <div class="row justify-content-center my-5">
            <div class="col-sm-12 col-md-8 col-lg-6 mt-1 mb-2">
                <h2 class="text-center mb-3">Fale Conosco</h2>
                <p><small>Duvidas Sugestões ... Aceitamos</small></p>
                

                <form action="{{ route('site.messages.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="text" name="nome" class="form-control form-control-lg much-rounded" maxlength="255" required placeholder="Digite Aqui Seu Nome:">
                    </div>

                    <div class="form-group">
                        <input type="text" name="emailEmissor" class="form-control much-rounded form-control-lg" maxlength="255" required placeholder="Email">
                    </div>

                    <div class="form-group">
                        <select name="categoryId" id="" class="form-control">
                            @foreach($messageCategories as $category)
                            <option value="{{$category->id}}">{{$category->nome}}</option>
                            @endforeach
                        </select>
                    </div>

                    <small class="text-danger">
                        Atenção: ao dar depoimentos aqui , seu depoimento será publicado com seu nome na pagina inicial do site no modulo de depoimentos
                    </small>

                    <div class="form-group">
                        <label>Mensagem</label>
                        <textarea class="form-control form-control-lg" name="message" required maxlength="255" style="resize: none;" >
                        
                        </textarea>
                    </div>

                    <button class="btn btn-primary"><div class="material-icons float-left mr-2">send</div> Enviar</button>
                </form>
            </div>
        </div>
    </section>

@endsection
