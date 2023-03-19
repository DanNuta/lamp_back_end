<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catalog;

class DeleteItemCategory extends Controller
{
    public function deleteItem($id){
        //category::where('name', $name)->delete();

        Catalog::where('id', $id)->delete();
    }
}
