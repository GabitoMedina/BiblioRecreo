<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::resource('Producto','ProductoController');
// Route::get('/producto', function () {
//     return view('index');
// });

//

Route::get('/', function () {
    return view('layouts.plantilla');
});
Route::get('/client', function () {
    return view('cliente.create');
});
Route::get('/product', function () {
    return view('producto.index');
});

Route::get('/sell', function () {
    return view('ventas.create');
});
//
// Route::get('/addprod', function () {
//     return view('create');
// });
// Route::get('/prod', function () {
//     return view('products');
// });
