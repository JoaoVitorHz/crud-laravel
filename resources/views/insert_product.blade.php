<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">  
    <link rel="stylesheet" href="css/insert-product.css">
    <title>Crud - Produtos</title>
</head>

<body>
    <h1>Cadastro de Produtos</h1>
    <div class="div-form">
        <form action="/insert-product" method="POST">
            @csrf

            <div class="div-input">
                <label for="">Nome:</label>
                <input type="text" name="product_name" placeholder="Digite o nome do produto...">
            </div>

            <div class="div-input">
                <label for="">Valor:</label>
                <input type="text" name="product_value" placeholder="Digite o valor do produto..."> 
            </div>

            <div class="div-input">
                <label for="">Quantidade:</label>
                <input type="text" name="product_qtd" placeholder="Digite o quantidade do produto...">
            </div>

            <div class="div-add-product">
                <button>Cadastrar produto</button>
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