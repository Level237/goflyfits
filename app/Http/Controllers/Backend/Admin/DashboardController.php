<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clothing;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $clothingCount=Clothing::count();
        $userCount=User::where('role_id',2)->count();
        return view('admin.dashboard',compact('clothingCount','userCount'));
    }
}
