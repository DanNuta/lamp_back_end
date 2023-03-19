<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catalog;


class ItemController extends Controller
{
    public function itemCatalog($id){

        $item = Catalog::select('title', 'price', 'img', 'id')->where('id', $id)->first();
        
        return view('itemCatalog', ['item'=>$item]);
    }
}
