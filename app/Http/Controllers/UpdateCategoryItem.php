<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catalog;

class UpdateCategoryItem extends Controller
{
    public function updateDateItem(Request $request){
        $title = $request->title;
        $id = $request->id;

        $query = Catalog::where('id', $id)->update(["title"=>$title]);


        return "";
    }


    public function updateDateItemPrice(Request $request){

        $price = $request->price;
        $id = $request->id;

        $query = Catalog::where('id', $id)->update(["price"=>$price]);


        return "";
    }
}
