<h3> FORNECEDOR </h3>

@php
    
@endphp


Fornecedor: {{ $fornecedores[0]['nome'] }}
<br />
Status: {{ $fornecedores[0]['status'] }}
<br />

@unless($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
@endunless