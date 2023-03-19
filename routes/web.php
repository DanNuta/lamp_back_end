<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogItem;
use App\Http\Controllers\CategoryGet;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UpdateCategoryItem;
use App\Http\Controllers\DeleteItemCategory;
use App\Http\Controllers\AddNewItemForm;
use App\Http\Controllers\AddCategory;

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


Route::get('/new-item', [AddNewItemForm::class, 'addNewItemForm']);


Route::post('/addNewItem', [CatalogItem::class, 'addNewItem']);


Route::get('/itemCatalog/{id}', [ItemController::class, 'itemCatalog']);


Route::POST('/updateItem', [UpdateCategoryItem::class, "updateDateItem"]);

Route::POST('/updateItemPrice', [UpdateCategoryItem::class, "updateDateItemPrice"]);

Route::get('/delete/{id}', [DeleteItemCategory::class, "deleteItem"]);

Route::get('/addCategory', [AddCategory::class, "getFormCategory"]);

Route::post('/addCategoryInDataBase', [AddCategory::class, "addCategoryInDataBase"]);

Route::delete('/deleteCategory', [AddCategory::class, "deleteCategory"]);