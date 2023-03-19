<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class addNewItemForm extends Controller
{
    public function addNewItemForm(){
        $category = Category::all('id', 'category');

        return view("newProduct", ['category'=>$category]);
    }
}
