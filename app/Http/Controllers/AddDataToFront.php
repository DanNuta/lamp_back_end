<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Catalog;

class AddDataToFront extends Controller
{
    public function catalog(){
        $data =  Catalog::all('id', 'title', 'price', 'img');
        header('Access-Control-Allow-Origin', '*');

        return json_encode($data);
    }


    public function category(){
        return category::all('id', 'category');
    }



}
