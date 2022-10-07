
<form action={{route('site.contatos')}} method="post">
    {{--@csrf é o comando para a criação do token --}}
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="Borda-preta">
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="Borda-preta">
    <br>

    <input name="email" type="text" placeholder="E-mail" class="Borda-preta}">
    <br>
    <select name="motivo_contato" class="Borda-preta
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem"class="Borda-preta">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="Borda-preta">ENVIAR</button>
</form>

