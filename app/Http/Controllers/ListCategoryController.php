<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListCategoryController extends Controller
{
    public function listCategoty($id){


        // $date = DB::table("catalogs")
        // ->join("categories", 'catalogs.id_category', '=', 'categories.id')
        // ->get();
        // ;

        $data = DB::table("catalogs")
        ->join("categories", 'catalogs.id_category', '=', 'categories.id')
        ->where('catalogs.id_category', '=', $id)
        ->get();





        return view("listCategoryFilter", ['data'=> $data]);
    }
}
