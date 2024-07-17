<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Clothing;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){

        $categories=Category::all();
        if($request->session()->has("preferences")){
            $clothings=Clothing::join('category_clothing','category_clothing.clothing_id','clothing.id')
            ->join('categories','categories.id','category_clothing.category_id')
            ->whereIn('category_clothing.category_id',$request->session()->get('preferences'))
            ->inRandomOrder()->take(8)
            ->get();
            $isPreferences=true;
        }else{
            $clothings=Clothing::inRandomOrder()->take(8)->get();
            $isPreferences=false;
        }


        //return $clothings;
        return view('Homepage',compact('categories','clothings','isPreferences'));
    }
}
