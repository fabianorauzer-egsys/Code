<h3> FORNECEDOR </h3>

@php
    
@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br />
    Status: {{ $fornecedores[0]['status'] }}
    <br />
    CNPJ: {{ $fornecedores[0]['CNPJ'] }}
    @empty($fornecedores[0]['CNPJ'])
        - Vazio
    @endempty
    <br />
    <hr>
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br />
    Status: {{ $fornecedores[1]['status'] }}
    <br />
    @isset($fornecedores[1]['CNPJ'])
        CNPJ: {{ $fornecedores[1]['CNPJ'] }}
        @empty($fornecedores[0]['CNPJ'])
            - Vazio
        @endempty
    @endisset
    <br />
@endisset