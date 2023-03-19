<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Catalog;

class CatalogItem extends Controller
{
    public function addNewItem(Request $request){
        
        $imagesPath = time().'.'.$request->image->extension();
        $request->image->move(public_path("images"), $imagesPath);

        Catalog::create([
            'title'=>$request->title,
            'price'=>$request->price,
            'img'=>$imagesPath,
            'id_category'=>$request->category
        ]);
    
         return redirect('/');
    }

}
