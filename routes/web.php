<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Produto;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//  Get Product Routes
Route::get('/', function () {
    $produto = Produto::all();
    return view('welcome', ['produto' => $produto]);
});

//  Add Product Routes
Route::get('/add-product', function () {
    return view('insert_product');
});
Route::post('/insert-product', function (Request $dados) {
    Produto::create([
        'name' => $dados->product_name,
        'quantidade' => $dados->product_qtd,
        'valor' => $dados->product_value
    ]);
    return redirect('');
});

//  Edit Product Routes
Route::get('/edit-product/{id}', function ($id) {
    $produto = Produto::find($id);
    return view('edit_product', ['produto' => $produto]) ;
});
Route::put('/editar-product/{id}', function (Request $dados, $id) {
    $produto = Produto::findOrFail($id);
    $produto->name = $dados->product_name;
    $produto->valor = $dados->product_value;
    $produto->quantidade = $dados->product_qtd;
    $produto->save();
    return redirect('');
});

//  Delete Product Routes
Route::get('/delete-product/{id}', function ($id) {
    $produto = Produto::find($id);
    $produto->delete();
    return redirect('');
});