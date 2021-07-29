<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'off',
                'cnpj' => '0',
                'ddd' => '71',
                'telefone' => '1111-1111',
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'on',
                'cnpj' => ' 5051112181',
                'ddd' => '54',
                'telefone' => '22222-1111',
            ],
            1 => [
                'nome' => 'Fornecedor 3',
                'status' => 'on',
                'cnpj' => ' 5051112181',
                'ddd' => '11',
                'telefone' => '33333-1111',
            ],
        ];


        $msg =  isset($fornecedores[1]['cnpj']) ? 'CNPJ  iNFORMADO' : 'CNPJ NÃO INFORMADO';
        echo $msg;
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
