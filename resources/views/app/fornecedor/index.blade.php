<h3>Fornecedor</h3>

@php

@endphp
@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>

    CNPJ: {{ $fornecedores[1]['cnpj'] ?? '' }}
    <br>
    TELEFONE:( {{ $fornecedores[1]['ddd'] ?? '' }}) {{ $fornecedores[0]['telefone'] ?? '' }}

    @switch($fornecedores[1]['ddd'] )
        @case('71')
            Salvador - BA
        @break
        @case(54)
            Caxias de Sul e Região - RS
        @break
        @case(11)
            São Paulo - SP
        @break
        @default
            Estado Não Identificado
    @endswitch

@endisset
