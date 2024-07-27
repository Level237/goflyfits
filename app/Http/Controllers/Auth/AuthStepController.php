<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthStepController extends Controller
{
    public function stepOne(RegisterRequest $request){

        if(Session::has('email') && Session::has('password')){
            Session::forget("email");
            Session::forget("password");
            Session::forget("phone_number");
            Session::forget("name");
            Session::forget('preferences');
            Session::forget('town');
       }else{
        $email=$request->email;
        $password=$request->password;
        Session::put('email',$email);
        Session::save();
        Session::put('password',$password);
        Session::save();
        return to_route("stepOneView");
       }

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
            Session::save();
            Session::put('phone_number',$phone_number);
            Session::save();
            Session::put('town',$town);
            Session::save();
            return to_route('stepTwoView');
       }else{
             return to_route("register");
        }
    }

    public function stepTwoView(){
        if(Session::has("email")&& Session::has("password") && Session::has("name")){
            $categories=Category::all();
            return view('auth.step-two',compact('categories'));
        }

    else{
        return to_route('register');
    }
}

    public function stepFinal(Request $request){
        if(Session::has('email') && Session::has('password')){
            $name=Session::get('name');
        $email=Session::get('email');
        $password=Session::get('password');
        $phone_number=Session::get('phone_number');
        $town=Session::get('town');
        $preferences=$request->preferences;
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'town'=>$town,
            'phone_number'=>$phone_number,
            'color'=>$this->randomColor(),
            'isChoice'=>1,
            'role_id'=>2
        ]);
        foreach($preferences as $preference){
            $user->preferences()->attach($preference);
        }


        event(new Registered($user));

        Auth::login($user);

        if(auth()->user()->role_id===1){
            return to_route('admin.dashboard');
        }
        if(auth()->user()->role_id===2){
            $preferenceArray=[];
            if(isset(auth()->user()->preferences)){
                foreach(auth()->user()->preferences as $preferences){
                    array_push($preferenceArray,$preferences->id);
                }
                $request->session()->put("preferences",$preferenceArray);
            }
            return to_route("customer.dashboard");
        }
        }else{

            return to_route('register');
        }
    }

    public function randomColor(){
        $colors = array("red", "orange", "green", "brown", "chocolate","crimson","darkmagenta","mediumslateblue","tomato");

        $randomIndex = array_rand($colors);
        $randomColor = $colors[$randomIndex];

        return $randomColor;
    }
}
