<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>SG-@yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/estilo_basico.css') }}">
    </head>


 </body>
 {{--relizaremos o @include do partial menu--}}
       @include('app.layouts._partials.menu')
 {{--criação da seção d ecodigo com yield() --}}
 @yield('conteudo')
 </body>
</html>
