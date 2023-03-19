<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListCategoryController extends Controller
{
    public function listCategoty($id){


        $data = DB::table("categories")
        ->join("catalogs", 'catalogs.id_category', '=', 'categories.id')
        ->where('catalogs.id_category', '=', $id)
        ->get();
        ;





        return view("listCategoryFilter", ['data'=> $data]);
    }
}
