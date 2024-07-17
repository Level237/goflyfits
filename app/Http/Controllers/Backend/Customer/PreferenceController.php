<?php

namespace App\Http\Controllers\Backend\Customer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Clothing;
use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    public function index(Request $request){
        $categoriesPreferences=$request->session()->get('preferences');
        $clothings=Clothing::join('category_clothing','category_clothing.clothing_id','clothing.id')
            ->join('categories','categories.id','category_clothing.category_id')
            ->whereIn('category_clothing.category_id',$categoriesPreferences)
            ->take(4)
            ->get();
            $categories=Category::whereIn("id",$categoriesPreferences)->get();
        return view('customer.preferences.index',compact('clothings','categories'));
    }
}
