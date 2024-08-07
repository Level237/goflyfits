<?php

namespace App\Http\Controllers\Backend\Customer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Clothing;
use App\Models\User;
use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    public function index(Request $request){
        $categoriesPreferences=$request->session()->get('preferences');
        $clothings=Clothing::join('category_clothing','category_clothing.clothing_id','clothing.id')
            ->join('categories','categories.id','category_clothing.category_id')
            ->whereIn('category_clothing.category_id',$categoriesPreferences)
            ->where('town_id',auth()->user()->town_id)
            ->take(4)
            ->get();
            $categories=Category::whereIn("id",$categoriesPreferences)->get();
        return view('customer.preferences.index',compact('clothings','categories'));
    }

    public function edit(Request $request){
        $categoriesPreferences=$request->session()->get('preferences');
        $categoriesSelected=Category::whereIn("id",$categoriesPreferences)->get();
        $categories=Category::whereNotIn("id",$categoriesPreferences)->get();

        //return $categories;
        return view('customer.preferences.edit',compact('categories','categoriesSelected'));
    }
    public function update(Request $request){
            $request->session()->put("preferences",$request->categories);
            $user=User::find(auth()->user()->id);
            $user->preferences()->sync($request->categories);
            return to_route('customer.preferences');
    }
}
