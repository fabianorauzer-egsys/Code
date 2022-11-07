<h3> FORNECEDOR </h3>

@php
    
@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br />
    Status: {{ $fornecedores[0]['status'] }}
    <br />
    CNPJ: {{ $fornecedores[0]['cnpj'] }}
    @empty($fornecedores[0]['cnpj'])
        - Vazio
    @endempty
    <br />
    <hr>
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br />
    Status: {{ $fornecedores[1]['status'] }}
    <br />
    CNPJ: {{$fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido'}}
    <br />
@endisset