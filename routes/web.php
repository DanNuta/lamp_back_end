<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogItem;
use App\Http\Controllers\CategoryGet;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UpdateCategoryItem;
use App\Http\Controllers\DeleteItemCategory;
use App\Http\Controllers\AddNewItemForm;
use App\Http\Controllers\AddCategory;
use App\Http\Controllers\ListCategoryController;
use App\Http\Controllers\AddDataToFront;
use App\Http\Controllers\AuthentificareController;

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

Route::get('/', [CategoryGet::class, 'getCategoryFromDB'])->middleware('auth');


Route::get('/new-item', [AddNewItemForm::class, 'addNewItemForm'])->middleware('auth');


Route::post('/addNewItem', [CatalogItem::class, 'addNewItem'])->middleware('auth');


Route::get('/itemCatalog/{id}', [ItemController::class, 'itemCatalog'])->middleware('auth');


Route::POST('/updateItem', [UpdateCategoryItem::class, "updateDateItem"])->middleware('auth');

Route::POST('/updateItemPrice', [UpdateCategoryItem::class, "updateDateItemPrice"])->middleware('auth');

Route::get('/delete/{id}', [DeleteItemCategory::class, "deleteItem"])->middleware('auth');

Route::get('/addCategory', [AddCategory::class, "getFormCategory"])->middleware('auth');

Route::post('/addCategoryInDataBase', [AddCategory::class, "addCategoryInDataBase"])->middleware('auth');

Route::delete('/deleteCategory', [AddCategory::class, "deleteCategory"])->middleware('auth');

Route::get('/category/{item}', [ListCategoryController::class, 'listCategoty'])->middleware('auth');

Route::get('/catalog', [AddDataToFront::class, "catalog"])->middleware('auth');
Route::get('/category', [AddDataToFront::class, "category"]);

Route::get('/login', [AuthentificareController::class, "showLogin"])->middleware('guest')->name('login');
Route::post('/login', [AuthentificareController::class, "authentificate"])->name('postlogin');
Route::get('/logout', [AuthentificareController::class, "logout"])->middleware('auth');

