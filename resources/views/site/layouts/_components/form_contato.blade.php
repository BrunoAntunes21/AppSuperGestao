
<form action={{route('site.contatos')}} method="post">
    {{--@csrf é o comando para a criação do token --}}
    @csrf
    <input  name="Nome" type="text" placeholder="Nome" class="Borda-preta"  value="{{ old('Nome') }}">
    <br>
    <input  name="telefone"  type="text" placeholder="Telefone" class="Borda-preta" value="{{ old('telefone') }}">
    <br>

    <input  name="email"  type="text" placeholder="E-mail" class="Borda-preta" value="{{ old('email') }}"">
    <br>

    <select name="motivo_contatos" class="Borda-branca">
        <option value="">Qualo motivo do contato?</option>
        {{--criando a trativa selected no option pra gravar os dados já passados em caso de erro --}}
        Qual o motivo do contato?
        {{-- Essa parte tá certa Não mexer --}}
        <option value="">qual o motivo do contato</option>
        <option value="1" {{ old("motivo_contato")==1 ?'selected':''}}>Dúvida</option>
        <option value="2" {{ old("motivo_contato")==2 ?'selected':''}}>Elogio</option>
        <option value="3" {{ old("motivo_contato")==3 ?'selected':''}}>Reclamação</option>

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

