<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Catalog;

class AddCategory extends Controller
{
    public function getFormCategory(){
        $all_category = Category::all('id', 'category');
    
        return view('addCategory', ['category'=> $all_category]);
    }


    public function addCategoryInDataBase(Request $request){

        Category::create([
            'category'=>$request->category
        ]);
        return redirect("/");
    }


    public function deleteCategory(Request $request){

       // dd($request->all());

       Category::where('id', $request->id)->delete();

        return $request->id;

    }
}
