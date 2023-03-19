<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Catalog;

class AddDataToFront extends Controller
{
    public function catalog(){
        return Catalog::all('id', 'title', 'price', 'img');
    }


    public function category(){
        return category::all('id', 'category');
    }



}
