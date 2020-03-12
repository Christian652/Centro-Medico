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
                

                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control much-rounded form-control-lg" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <select name="" id="" class="form-control">
                            <option value="">Duvida</option>
                            <option value="">Critica</option>
                            <option value="">Opinião</option>
                            <option value="">Sugestão</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Mensagem</label>
                        <textarea class="form-control form-control-lg" style="resize: none;" >
                        
                        </textarea>
                    </div>

                    <button class="btn btn-primary"><div class="material-icons float-left mr-2">send</div> Enviar</button>
                </form>
            </div>
        </div>
    </section>

@endsection
