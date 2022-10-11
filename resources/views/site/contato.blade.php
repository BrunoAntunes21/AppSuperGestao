{{--para fazer a utilização do template se usa @extends('subpast1.subpast2.nome_do_arquivo') --}}
@section('titulo',$titulo)


@extends('site.layouts.basico')
@section('conteudo')
       {{--relizaremos o @include do partial menu
       @include('site.layouts._partials.menu')--}}

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Entre em contato conosco</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">
                    {{--criação da pasta component no diretorio layouts e criação
                        do componente de formulario(form_contato.blade.php) --}}


                    {{--Passagem de parametros via array assosiativo --}}
                   @component('site.layouts._components.form_contato',['classe'=>'borda-preta'])

                    {{--passagem de parametros via slot --}}
                    <p> a nossa equipe analisará e retornará o mais breve possivel
                    empo médio de resposta é 48 horas</p>

                   @endcomponent
                </div>
            </div>
        </div>

        

        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="{{asset('img/facebook.png')}}">

                 <img src="{{asset('img/linked.png')}}">
                  <img src="{{asset('img/youtube.png')}}">

            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="{{asset('img/mapa.png')}}">



            </div>
        </div>
@endsection
