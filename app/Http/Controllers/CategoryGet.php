<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Catalog;


class CategoryGet extends Controller
{
    
    public function getCategoryFromDB(){

       // $date = Catalog::all('id','title', 'price', 'img');

       


        $date = DB::table("catalogs")
        ->join("categories", 'catalogs.id_category', '=', 'categories.id')
        ->get();
        ;
        

        return view('welcome', ['data'=> $date]);
    }
}
