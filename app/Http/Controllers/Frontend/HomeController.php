<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Clothing;
use App\Models\Measure;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){

        $isSearch=false;
        if($request->type){

            $isSearch=true;
        }
        $categories=Category::all();

        //$measureUser=auth()->user()->measure_id;
        //$measure=Measure::find($measureUser);
        if($request->session()->has("preferences")){
            $clothings=Clothing::join('category_clothing','category_clothing.clothing_id','clothing.id')
            ->join('categories','categories.id','category_clothing.category_id')
            ->join('measures','measures.id','measure_id')
            ->whereIn('category_clothing.category_id',$request->session()->get('preferences'))
            ->where('town_id',auth()->user()->town_id)
            ->where('gender',auth()->user()->gender_user)

            ->where('size',auth()->user()->size)
            ->inRandomOrder()->take(8)
            ->get();
            $isPreferences=true;
        }else{
            $clothings=Clothing::take(6)->get();
            $isPreferences=false;
        }


        //return $clothings;
        return view('Homepage',compact('categories','clothings','isPreferences',"isSearch"));
    }
}
