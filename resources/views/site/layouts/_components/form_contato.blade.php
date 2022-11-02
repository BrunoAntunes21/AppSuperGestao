
<form action={{route('site.contatos')}} method="post">
    {{--@csrf é o comando para a criação do token --}}
    @csrf
    <input  name="nome" type="text" placeholder="Nome" class="Borda-preta"  value="{{ old('Nome') }}">
    @if($errors->has('nome'))
        {{$errors->first('nome')}}
    @endif
    <br>
    <input  name="telefone"  type="text" placeholder="Telefone" class="Borda-preta" value="{{ old('telefone') }}">
    @if($errors->has('telefone'))
    {{$errors->first('telefone') ? $errors->first('telefone') : ''}}
    @endif
    <br>

    <input  name="email"  type="text" placeholder="E-mail" class="Borda-preta" value="{{ old('email') }}"">
    @if($errors->has('email'))
    {{$errors->first('email') ? $errors->first('email'):''}}
    @endif
    <br>

    <select name="motivo_contatos" class="Borda-branca">
        <option value="">Qualo motivo do contato?</option>
        {{--criando a trativa selected no option pra gravar os dados já passados em caso de erro --}}
        Qual o motivo do contato?
        {{-- Essa parte tá certa Não mexer --}}
        <option value="">qual o motivo do contato</option>
        <option value="1" {{ old("motivo_contatos")==1 ?'selected':''}}>Dúvida</option>
        <option value="2" {{ old("motivo_contatos")==2 ?'selected':''}}>Elogio</option>
        <option value="3" {{ old("motivo_contatos")==3 ?'selected':''}}>Reclamação</option>

    </select>
    @if($errors->has('motivo_contatos'))
    {{$errors->first('motivo_contatos') ? $errors->first('motivo_contatos'):''}}
    @endif
    <br>
    <textarea name="mensagem"  class="Borda-preta">
    @if(old('mensagem') !='')

    @else
        Preencha a mensagem
    @endif
    </textarea>
    @if($errors->has('mensagem'))
    {{$errors->first('mensagem')}}
    @endif
    <br>
    <button type="submit" class="Borda-preta">ENVIAR</button>
</form>
{{-- @if($errors->any())
    <div style="position:absolute; top:0px;left:0px;width:100%;background-color:red;">
        @foreach ($errors->all() as $erro)
            {{$erro}}
            <br>

        @endforeach
    </div>
@endif
--}}
