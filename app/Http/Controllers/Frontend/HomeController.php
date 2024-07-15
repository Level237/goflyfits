<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Clothing;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $clothings=Clothing::inRandomOrder()->take(8)->get();
        $categories=Category::all();

        //return $clothings;
        return view('Homepage',compact('categories','clothings'));
    }
}
