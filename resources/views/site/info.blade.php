 @extends('site.layouts.basico'){{--para fazer a utilização do template se usa @extends('subpast1.subpast2.nome_do_arquivo') --}}
{{--Criação da seção para o envio ao template--}}
@section('titulo',$titulo)

 @section('conteudo')
       {{--relizaremos o @include do partial menu
       @include('site.layouts._partials.menu')--}}



        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Olá, eu sou o Super Gestão</h1>
            </div>

            <div class="informacao-pagina">
                <p>O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar os negócios da sua empresa.</p>
                <p>Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus negócios!</p>
            </div>
        </div>

        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="{{asset('img/facebook.png')}}">
                 <img src="{{asset('img/logo.png')}}">
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

