<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Clothing;
use App\Models\Town;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $categories=Category::all();
        $town=Town::where('town_name',$request->town)->first();
        $category=Category::find($request->category_id);
            $clothings=Clothing::join('category_clothing','category_clothing.clothing_id','clothing.id')
            ->join('categories','categories.id','category_clothing.category_id')
            ->join('towns','towns.id','clothing.town_id')
            ->join('measures','measures.id','measure_id')
            ->where('category_clothing.category_id',$category->id)
            ->where('towns.id',$town->id)
            ->where('size',auth()->user()->size)
            ->get();
            $category_name=$category->category_title;

            //return $clothings;
            return view('clothings.list',compact('clothings','category_name','categories'));
    }
}
