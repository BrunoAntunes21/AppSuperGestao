@extends('app.layouts._partials.basico')
@section('titulo','Fornecedor')
@section('conteudo')
  <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Fornecedor-adicionar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="">Novo Fornecedor</a></li><li><a href="{{ route('app.fornecedores')}}">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="witdh :30%; margin-left:auto; margin-left:auto;">
                <form method="post" action="">
                    <input type="text" name="nome" placeholder="Nome" class="borda-preta">
                    <input type="text" name="site" placeholder="Site"class="borda-preta">
                    <input type="text" name="uf" placeholder="Uf"class="borda-preta">
                    <input type="text" name="email" placeholder="E-mail" class="borda-preta">
                    <button type="submit" class="borda-preta">Pesquisar</button>
                </form>
            </div>
        </div>
  <div>

@endsection
