<h3>Fornecedor</h3>

@php

@endphp
@isset($fornecedores)

    @for ($i = 0; isset($fornecedores[$i]); $i++)

        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>

        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
        <br>
        TELEFONE:( {{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
        <hr>
        {{-- @switch($fornecedores[$i]['ddd'] )
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
        @endswitch --}}

    @endfor
@endisset
