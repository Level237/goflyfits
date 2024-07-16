<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClothingController extends Controller
{
    public function allClothing(){

        return view('clothings.list');
    }

    public function show(){

    }
}
