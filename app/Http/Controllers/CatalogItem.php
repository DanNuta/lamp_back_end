<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Catalog;

class CatalogItem extends Controller
{
    public function addNewItem(Request $request){
        $imagesPath = time().'-'.$request->title.'.'.$request->image->extension();
        $request->image->move(public_path("images"), $imagesPath);

        Catalog::create([
            'title'=>$request->title,
            'price'=>$request->price,
            'img'=>$imagesPath
        ]);


       

        // $title = $request->title;
        // $price = $request->price;
        // $img = $request->img;

        //$users = DB::connection('mysql2')->select('SELECT * FROM catalog');

        //  DB::table('catalog')->insert([
        //         'title'=>$title,
        //         'price'=>$price,
        //         'img'=>$img
        // ]);


        //DB::insert('insert into catalog (title, price, img) values (?, ?, ?)', ['fgfdgdf', 'Dayle', 'gfg']);


        // $date = DB::select('SELECT * FROM catalog');

    
         return redirect('/');
    }

}
