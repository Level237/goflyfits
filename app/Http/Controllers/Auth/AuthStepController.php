<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\StepOneRequest;
use App\Http\Requests\StepThreeRequest;
use App\Http\Requests\StepTwoRequest;
use App\Models\Category;
use App\Models\Town;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthStepController extends Controller
{
    public function stepOne(RegisterRequest $request){


        $full_name=$request->full_name;
        $name=$request->name;
        $gender_user=$request->gender_user;
        Session::put('full_name',$full_name);
        Session::save();
        Session::put('name',$name);
        Session::save();
        Session::put('gender_user',$gender_user);
        Session::save();
        return to_route("stepTwoView");


    }

    public function stepOneView(){

        if(Session::has('full_name') && Session::has('name') && Session::has('gender_user')){
            Session::forget("full_name");
            Session::forget("name");
            Session::forget("gender_user");
            Session::forget("phone_number");
            Session::forget('email');
            Session::forget('town');
            Session::forget("birthday");

       }

           return view('auth.register.step-one');

    }

    public function stepTwo(StepOneRequest $request){
        if(Session::has('full_name') && Session::has('name') && Session::has('gender_user')){
            $phone_number=$request->phone_number;
            $email=$request->email;
            $birthday=$request->birthday;
            Session::put('name',$phone_number);
            Session::save();
            Session::put('phone_number',$email);
            Session::save();
            Session::put('town',$birthday);
            Session::save();
            return to_route('stepThreeView');
       }else{
            return to_route('stepOneView');
        }
    }
    public function stepThreeView(){
        $towns=Town::all();
        return view('auth.register.step-three',compact('towns'));
    }
    public function stepTwoView(){
        if(Session::has('full_name') && Session::has('name') && Session::has('gender_user')){
            $categories=Category::all();
            return view('auth.register.step-two',compact('categories'));
        }

    else{
        return to_route('stepOneView');
    }
}

    public function stepFinal(StepThreeRequest $request){
        if(Session::has('email') && Session::has('password')){
            $name=Session::get('name');
        $email=Session::get('email');
        $password=Session::get('password');
        $phone_number=Session::get('phone_number');
        $town=Session::get('town');
        $genderUser=Session::get('gender_user');
        $preferences=$request->preferences;
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'town_id'=>$town,
            'size'=>$request->size,
            'weight'=>$request->weight,
            'phone_number'=>$phone_number,
            'color'=>$this->randomColor(),
            'gender_user'=>$genderUser,
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
