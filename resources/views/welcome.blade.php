<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <title>Crud - Produtos</title>
</head>
<body>

    <h1>Listagem de Produtos</h1>


    <div class="list-content">
        <header >
            <a href="/add-product">Cadastro Produto</a>
        </header>

        <div class="div-list-user">
            <table>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Ações</th>

                <?php   
                foreach($produto as $iten):
                ?> 

                <tr>
                    <td><?php echo $iten['id'];?></td>
                    <td><?php echo $iten['name'];?></td>
                    <td>R$: <?php echo  $iten['valor'];?></td>
                    <td><?php echo $iten['quantidade'];?></td>
                    <td>
                        <a href="/edit-product/{{$iten->id}}">Editar</a>
                        <a href="/delete-product/{{$iten->id}}">Excluir</a>
                    </td>
                </tr>

                <?php endforeach;?>
            </table>
        </div>
    </div>
    
    <a href="https://github.com/JoaoVitorHz/crud-laravel.git" target="_blank" class="a-github">
        <span>Acessar Documentação</span>
    </a>

</body>
</html>