<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogItem extends Controller
{
    public function addNewItem(Request $request){
        $name = $request->input('name');
        return $name;
    }
}
