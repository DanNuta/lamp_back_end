<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogItem;
use App\Http\Controllers\CategoryGet;
use App\Http\Controllers\ItemController;

use Illuminate\Support\Facades\DB;

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

Route::get('/', [CategoryGet::class, 'getCategoryFromDB']);


Route::get('/new-item', function () {
    return view('newProduct');
});


Route::post('/addNewItem', [CatalogItem::class, 'addNewItem']);


Route::get('/itemCatalog/{id}', [ItemController::class, 'itemCatalog']);