<h3>Fornecedor</h3>

@php

@endphp

{{-- @dd($fornecedores) --}}

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) >10 )
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda Não Existem Funcionários cadastrados</h3>
@endif
