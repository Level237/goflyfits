<?php

namespace App\Http\Controllers\Backend\Customer;

use App\Http\Controllers\Controller;
use App\Models\Town;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $towns=Town::all();
        return view('customer.dashboard',compact('towns'));
    }
}
