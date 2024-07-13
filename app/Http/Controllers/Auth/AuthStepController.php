<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthStepController extends Controller
{
    public function stepOne(Request $request){
        $email=$request->email;
        $password=$request->password;
        Session::put('email',$email);
        Session::put('password',$email);
        return to_route("stepOneView");
    }

    public function stepOneView(){
        return view('auth.step-one');
    }
}
