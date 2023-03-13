<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogItem;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/new-item', function () {
    return view('newProduct');
});

//Route::post('/addNewItem', [CatalogItem::class, 'addNewItem']);


Route::post('/addNewItem', [CatalogItem::class, 'addNewItem']);




Route::get('/item', [CatalogItem:: class, 'item']);