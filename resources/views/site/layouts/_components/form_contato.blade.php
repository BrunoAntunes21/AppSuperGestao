
<form action={{route('site.contatos')}} method="post">
    {{--@csrf é o comando para a criação do token --}}
    @csrf
    <input  name="Nome" type="text" placeholder="Nome" class="Borda-preta"  value="{{ old('Nome') }}">
    <br>
    <input  name="telefone"  type="text" placeholder="Telefone" class="Borda-preta" value="{{ old('telefone') }}">
    <br>

    <input  name="email"  type="text" placeholder="E-mail" class="Borda-preta" value="{{ old('email') }}"">
    <br>

    <select name="motivo_contato" class="Borda-preta">
        <option value="">Qualo motivo do contato?</option>
        {{--criando a trativa selected no option pra gravar os dados já passados em caso de erro --}}
        Qual o motivo do contato?
        {{-- Essa parte tá certa Não mexer --}}
        @foreach ($motivo_contatos as $key=>$motivo_contato)
            <option value="{{$key}} {{ old('motivo_contato') ==$key ? 'Selected':''}}">{{$motivo_contato}}</option>
        @endforeach

    </select>
    <br>
    <textarea name="mensagem"  class="Borda-preta">
    @if(old('mensagem') !='')

    @else
        Preencha a mensagem
    @endif
    </textarea>
    <br>
    <button type="submit" class="Borda-preta">ENVIAR</button>
</form>

