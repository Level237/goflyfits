<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthStepController extends Controller
{
    public function stepOne(Request $request){
        $email=$request->email;
        $password=$request->password;
        Session::put('email',$email);
        Session::save();
        Session::put('password',$password);
        Session::save();
        return to_route("stepOneView");
    }

    public function stepOneView(){
        if(Session::has('email') && Session::has('password')){
           return view('auth.step-one');
      }else{
            return to_route("register");
       }
    }

    public function stepTwo(Request $request){
        if(Session::has('email') && Session::has('password')){
            $name=$request->name;
            $phone_number=$request->phone_number;
            $town=$request->town;
            Session::put('name',$name);
            Session::put('phone_number',$phone_number);
            Session::put('town',$town);
            return to_route('stepTwoView');
       }else{
             return to_route("register");
        }
    }

    public function stepTwoView(){

        $categories=Category::all();
        return view('auth.step-two',compact('categories'));
    }
}
