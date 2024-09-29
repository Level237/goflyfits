<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\StepFourRequest;
use App\Http\Requests\StepInitRequest;
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

    public function stepInit(StepInitRequest $request){
        $email=$request->email;
        $password=$request->password;
        Session::put('email',$email);
        Session::save();
        Session::put('password',$password);
        Session::save();

        return to_route('stepOneView');
    }
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
            $birthday=$request->birthday;
            Session::put('phone_number',$phone_number);
            Session::save();
            Session::save();
            Session::put('birthday',$birthday);
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

public function stepThree(StepTwoRequest $request){

    $country=$request->country;
    $town=$request->town;
    Session::put('name',$country);
    Session::save();
    Session::put('town',$town);
    Session::save();
    return to_route('stepFourView');
}

public function stepFourView(){

    $gender=Session::get('gender_user');

    return view('auth.register.step-four');
}

public function stepFour(StepFourRequest $request){
    $height=$request->height;
    $weight=$request->weight;
    $size=$request->size;
    Session::put('height',$height);
    Session::save();
    Session::put('town',$weight);
    Session::save();
    Session::put('size',$height);
    Session::save();

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
