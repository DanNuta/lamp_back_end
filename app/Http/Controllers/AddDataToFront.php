<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Catalog;

class AddDataToFront extends Controller
{
    public function catalog(){
        $data =  Catalog::all('id', 'title', 'price', 'img');
       

        return json_encode($data);
    }


    public function category(){
        //$data = Category::all('id', 'category');

        $date = DB::table("categories")
        ->join("catalogs", 'catalogs.id_category', '=', 'categories.id')
        ->get();
        ;

        return json_encode($data);
    }



}
