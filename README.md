## Tecnologias Usadas 
- Laravel
- PHP 
- MySql
- XAMPP
- HTML
- CSS
  
 ## Para usar o projeto 
- Faça clone do projeto
- Crie um banco chamado ``produtos`` e execute o comando abaixo para criar as tabelas
```
php artisan migrate
```
 - Agora é só rodar a aplicação. 
 ```
php artisan serve  
 ```

 ## Para usar a API do Projeto
 Caso você queira usar o projeto atravez da API, você também consegue, mas vale a pena lembrar que esse projeto também tem Frontend, e vale a pena dar uma olhada.

Utilizei o POSTMAN para testar a API, deixa o arquivo de exemplo para você importar no seu POSTMAN, se preferir

 Depois de começar a roda o projeto como ``php artisan serve``, você vai pegar o caminho de onde o projeto esta rodando exemplo ``http://127.0.0.1:8000`` e vai acresentar na frente disso /api. ficando assim ``http://127.0.0.1:8000/api``.

Esses são as possiveis request.
 ```
get-all
insert-product
editar-product
delete-product
 ```

## get-all
 Para pegar todas os produtos, acresente ``/get-all`` na baseURL.
``http://127.0.0.1:8000/api/get-all``


Retorno 
```
{
    "id": 2,
    "name": "Notebook",
    "valor": "4000.00",
    "quantidade": 10,
    "created_at": "2023-04-02T02:46:55.000000Z",
    "updated_at": "2023-04-02T03:33:23.000000Z"
}
```
## insert-product
Para inserir um produto, acresente ``/insert-product`` na baseURL, ficando assim: ``http://127.0.0.1:8000/api/insert-product``. Troque o tipo da requisição para ``POST``, E coloque como parametro da URL os seguintes valores:

```
product_name - string
product_qtd - integer
product_value - decimal
```

Retorno 
```
{
 "Produto inserido com sucesso"
}
```

## edit-product
Para inserir um produto, acresente ``/edit-product`` na baseURL, ficando assim: ``http://127.0.0.1:8000/api/edit-product``. Troque o tipo da requisição para ``PUT``, E coloque como parametro da URL os seguintes valores:

```
product_id - id
product_name - string
product_qtd - integer
product_value - decimal
```

Retorno 
```
{
 "Produto alterado com sucesso"
}
```

## delete-product
Para inserir um produto, acresente ``/delete-product`` na baseURL, ficando assim: ``http://127.0.0.1:8000/api/delete-product``. Troque o tipo da requisição para ``PUT``, E coloque como parametro da URL os seguintes valores:

```
product_id - id
```

Retorno 
```
{
 "Produto apagado com sucesso"
}
```
