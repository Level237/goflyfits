<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Clothing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClothingController extends Controller
{
    public function allClothing(){

        $clothings=Clothing::query()
        ->orderBy('id','desc')
        ->get();
        return view('clothings.list',compact('clothings'));
    }

    public function getClothing(Request $request){

        $category=Category::where("category_title",$request->category)->first();
        $category_name=$category->category_title;
        $clothings=Clothing::join('category_clothing','category_clothing.clothing_id','clothing.id')
        ->join('categories','categories.id','category_clothing.category_id')
        ->where('category_clothing.category_id',$category->id)
        ->get();
        //$clothing=Clothing::find(15);

        //return $clothing->categories;
        //return $clothings;
        return view('clothings.list',compact('clothings','category_name'));
    }
    public function show(){

    }
}
