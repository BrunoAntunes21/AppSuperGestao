@extends('app.layouts._partials.basico')
@section('titulo','Fornecedor')
@section('conteudo')
  <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Fornecedor-lista</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="">Novo Fornecedor</a></li><li><a href="{{ route('app.fornecedores')}}">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="witdh :30%; margin-left:auto; margin-left:auto;">
             ... Lista ...
            </div>
        </div>
  <div>

@endsection
