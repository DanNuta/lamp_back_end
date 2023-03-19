<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catalog;


class CategoryGet extends Controller
{
    
    public function getCategoryFromDB(){

        $date = Catalog::all('id','title', 'price', 'img');
        

        return view('welcome', ['data'=> $date]);
    }
}
