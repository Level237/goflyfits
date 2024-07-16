<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Clothing;
use Illuminate\Http\Request;

class ClothingController extends Controller
{
    public function allClothing(){

        $clothings=Clothing::all();
        return view('clothings.list',compact('clothings'));
    }

    public function show(){

    }
}
