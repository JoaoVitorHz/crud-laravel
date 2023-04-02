<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}" /> 
    <link rel="stylesheet" href="{{ asset('css/edit-product.css') }}" />
    <title>Crud - Produtos</title>
</head>

<body>
    <h1>Editar Produto</h1>
    <div class="div-form">
        <form action="/editar-product/{{ $produto->id }}" method="POST">
            @csrf
            @method("PUT")
            <div class="div-input">   
                <label for="">Nome:</label>
                <input type="text" name="product_name" value="{{ $produto->name }}">
            </div>

            <div class="div-input">   
                <label for="">Valor:</label>
                <input type="text" name="product_value" value="{{ $produto->valor }}">
            </div>

            <div class="div-input">   
                <label for="">Quantidade:</label>
                <input type="text" name="product_qtd" value="{{ $produto->quantidade }}">
            </div>

            <div class="div-add-product">
                <button>Editar produto</button>
            </div>
        </form>
    </div>

    <a href="https://github.com/JoaoVitorHz/crud-laravel.git" target="_blank" class="a-github">
        <span>Acessar Documentação</span>
    </a>
    <a href="/" class="a-list">
        <span>Voltar a listagem</span>
    </a>
</body>
</html>