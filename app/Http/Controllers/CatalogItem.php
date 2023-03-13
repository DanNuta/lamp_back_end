<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogItem extends Controller
{
    public function addNewItem(Request $request){
        $name = $request->input('title');
        return $name;
    }


    public function item(){
        return "dan2";
    }
}
