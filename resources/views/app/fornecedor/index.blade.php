
{{-- cometario --}}
@php
   echo 'esse trecho do codigo é em php';
    $x=10;
    if($x>=10){
        echo 'é maior ou igual a 10';
        }else{
        echo 'é menor que 10';
        }
@endphp

@if (count($fornecedores)>0 &&count($fornecedores)<10)
    <h3> existem alguns fornecedores cadastrados</h3>
    @elseif(count($fornecedores)>10)
    <h3>existem mais de 10 fornecedores cadastrados</h3>
    @else
    <h3> não existem fornecedores cadastrados ainda</h3>

@endif
{{--@unless retorna o inverso do operador if executa se for falso--}}



<div>
@foreach ($fornecedores as $fornecedor )
    
    <hr>
    @if($loop->first)
    <h3>primeira interação<br>
    @endif
    Iteração atual:{{$loop->iteration}}<br>
    Fornecedor: {{ $fornecedor['nome'] }}
    <br>
    Status: {{ $fornecedor['status'] }}
    {{--@if(!($fornecedores[0]['status']=='S'))
    <br><h2> Fornecedor inativo</h2>
    @endif--}}
    <br>
    CNPJ:{{$fornecedor['cnpj']??'valor default/esse dado não foi preenchido'}}
    <br>
    Estado:
    @switch($fornecedor['ddd'])
        @case('11')
            São Paulo-SP
        @break

        @case('32')
        juiz de fora-Mg
        @break

        @case('85')
            fortaleza-CE
        @break

        @default
            OPS fornecedor não encontrado
        @break
    @endswitch

<br>
</div>





@if ($loop->last)
    <h3>Ultima interação</h3>    
@endif
@endforeach



    

