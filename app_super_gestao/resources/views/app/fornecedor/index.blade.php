<h3> FORNECEDOR </h3>

{{ 'Texto de teste com chaves'}} <br />
<?= 'Texto de teste com tag curta de PHP'; ?> <br />

{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

@php
    // Para comentários de uma linha

    /*
        Para comentários de múltiplas linhas
    */

    echo 'Texto de teste com echo';
@endphp