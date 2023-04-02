<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Produto;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/get-all', function () {
    $produto = Produto::all();
    return $produto;
});

Route::post('/insert-product', function (Request $dados) {
    Produto::create([
        'name' => $dados->product_name,
        'quantidade' => $dados->product_qtd,
        'valor' => $dados->product_value
    ]);
    return "Produtos Inseridos com sucesso!";
});

Route::put('/edit-product', function (Request $dados) {
    $produto = Produto::findOrFail($dados->product_id);
    $produto->name = $dados->product_name;
    $produto->valor = $dados->product_value;
    $produto->quantidade = $dados->product_qtd;
    $produto->save();
    return "Produtos Editado com sucesso!";
});

Route::delete('/delete-product', function (Request $dados) {
    $produto = Produto::find($dados->product_id);
    $produto->delete();
    return "Produtos Apagado com sucesso!";
});