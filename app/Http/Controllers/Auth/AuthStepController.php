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
use App\Models\Measure;
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

    $gender_user=Session::get('gender_user');

    return view('auth.register.step-four',compact("gender_user"));
}

public function stepFour(Request $request){

    $gender_user=Session::get('gender_user');
    if($gender_user==1){
        $hips=$request->hips;
        $front_shoulder_width=$request->front_shoulder_width;
        $back_shoulder_width=$request->back_shoulder_width;
        $front_jacket_length=$request->front_jacket_length;
        $size=$request->full_shoulder_width;
        $sleeves=$request->sleeves;
        $full_chest=$request->full_chest;
        $waist=$request->waist;
        Session::put('full_shoulder_width',$size);
        Session::save();
        Session::put('sleeves',$sleeves);
        Session::save();
        Session::put('full_chest',$full_chest);
        Session::save();
        Session::put('waist',$waist);
        Session::save();
        Session::put('hips',$hips);
        Session::save();
        Session::put('front_shoulder_width',$front_shoulder_width);
        Session::save();
        Session::put('back_shoulder_width',$back_shoulder_width);
        Session::save();
        Session::put('front_jacket_length',$front_jacket_length);
        Session::save();
    }

    if($gender_user==0){
        $hips=$request->hips;
        $front_shoulder_width=$request->front_shoulder_width;
        $back_shoulder_width=$request->back_shoulder_width;
        $front_jacket_length=$request->front_jacket_length;
        $neck=$request->neck;
        $throuser_length=$request->throuser_length;
        $cuff=$request->cuff;
        $back_length=$request->back_length;
        $bust=$request->bust;
        Session::put('hips',$hips);
        Session::save();
        Session::put('front_shoulder_width',$front_shoulder_width);
        Session::save();
        Session::put('back_shoulder_width',$back_shoulder_width);
        Session::save();
        Session::put('front_jacket_length',$front_jacket_length);
        Session::save();
        Session::put('neck',$neck);
        Session::save();
        Session::put('cuff',$cuff);
        Session::save();
        Session::put('throuser_length',$throuser_length);
        Session::save();
        Session::put('bust',$bust);
        Session::save();
        Session::put('back_length',$back_length);
        Session::save();
    }


    $height=$request->height;
    $weight=$request->weight;


    Session::put('height',$height);
    Session::save();
    Session::put('weight',$weight);
    Session::save();
    return to_route("stepFiveView");
}

public function stepFiveView(){

    $gender_user=Session::get('gender_user');

    //return $gender_user;
    return view('auth.register.step-five',compact('gender_user'));
}

        public function stepFive(Request $request){
            $gender_user=Session::get('gender_user');
            if($gender_user==1){
                $neck=$request->neck;
                $trouser_waist=$request->trouser_waist;
                $crotch=$request->crotch;
                $thigh=$request->thigh;
                $throuser_length=$request->throuser_length;
                $cuff=$request->cuff;
                Session::put('neck',$neck);
                Session::save();
                Session::put('trouser_waist',$trouser_waist);
                Session::save();
                Session::put('crotch',$crotch);
                Session::save();
                Session::put('thigh',$thigh);
                Session::save();
                Session::put('throuser_length',$throuser_length);
                Session::save();
                Session::put('cuff',$cuff);
                Session::save();
            }

            if($gender_user==0){
                $point_bust=$request->point_bust;
                $sleeve_length=$request->sleeve_length;
                $arm=$request->arm;
                $armHole=$request->armHole;
                $coat_length=$request->coat_length;
                $skirt_length=$request->skirt_length;
                $hight_hip=$request->hight_hip;
                $inseam=$request->inseam;
                $seat=$request->seat;
                $trouser_thigh=$request->trouser_thigh;
                Session::put('point_bust',$point_bust);
                Session::save();
                Session::put('sleeve_length',$sleeve_length);
                Session::save();
                Session::put('arm',$arm);
                Session::save();
                Session::put('armHole',$armHole);
                Session::save();
                Session::put('coat_length',$coat_length);
                Session::save();
                Session::put('skirt_length',$skirt_length);
                Session::save();
                Session::put('hight_hip',$hight_hip);
                Session::save();
                Session::put('inseam',$inseam);
                Session::save();
                Session::put('seat',$seat);
                Session::save();
                Session::put('trouser_thigh',$trouser_thigh);
                Session::save();
            }


           return to_route('stepFinalView');
        }

        public function stepFinalView(){
            $categories=Category::all();
            return view('auth.register.step-final',compact('categories'));
        }
    public function stepFinal(StepThreeRequest $request){
        if(Session::has('email') && Session::has('password')){
            $name=Session::get('name');
        $email=Session::get('email');
        $password=Session::get('password');
        $phone_number=Session::get('phone_number');
        $town=Session::get('town');
        $birthday=Session::get('birthday');
        $genderUser=Session::get('gender_user');
        $full_name=Session::get('full_name');
        $preferences=$request->preferences;
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'birthday'=>$birthday,
            'password' => Hash::make($password),
            'town_id'=>$town,
            'full_name'=>$full_name,
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

    public function saveMeasure(){

        $gender_user=Session::get('gender_user');

        if($gender_user==1){
            $full_shoulder_width=Session::get('full_shoulder_width');
            $sleeves=Session::get('sleeves');
            $full_chest=Session::get('full_chest');
            $waist=Session::get('waist');
            $hips=Session::get('hips');
            $front_shoulder_width=Session::get("front_shoulder_width");
            $back_shoulder_width=Session::get("back_shoulder_width");
            $front_jacket_length=Session::get('front_jacket_length');

            $neck=Session::get('neck');
            $trouser_waist=Session::get("trouser_waist");
            $crotch=Session::get("crotch");
            $thigh=Session::get("thigh");
            $throuser_length=Session::get('throuser_length');
            $cuff=Session::get("cuff");

            $measure=new Measure;
            $measure->full_shoulder_width=$full_shoulder_width;
            $measure->sleeves=$sleeves;
            $measure->full_chest=$full_chest;
            $measure->waist=$waist;
            $measure->hips=$hips;
            $measure->front_shoulder_width=$front_shoulder_width;
            $measure->back_shoulder_width=$back_shoulder_width;
            $measure->front_jacket_length=$front_jacket_length;
            $measure->neck=$neck;
            $measure->trouser_waist=$trouser_waist;
            $measure->crotch=$crotch;
            $measure->thigh=$thigh;
            $measure->throuser_length=$throuser_length;
            $measure->cuff=$cuff;
            $measure->save();
            return $measure;
        }
        if($gender_user==0){
            $hips=Session::get("hips");
            $front_shoulder_width=Session::get("front_shoulder_width");
            $back_shoulder_width=Session::get("back_shoulder_width");
            $front_jacket_length=Session::get("front_jacket_length");
            $neck=Session::get("neck");
            $throuser_length=Session::get("throuser_length");
            $cuff=Session::get("cuff");
            $back_length=Session::get("back_length");
            $bust=Session::get("bust");

            $point_bust=Session::get("point_bust");
            $sleeve_length=Session::get("sleeve_length");
            $arm=Session::get("arm");
            $armHole=Session::get("armHole");
            $coat_length=Session::get("coat_length");
            $skirt_length=Session::get("skirt_length");
            $hight_hip=Session::get("hight_hip");
            $inseam=Session::get("inseam");
            $seat=Session::get("seat");
            $trouser_thigh=Session::get("trouser_thigh");

            $measure=new Measure;
            $measure->hips=$hips;
            $measure->front_shoulder_width=$front_shoulder_width;
            $measure->back_shoulder_width=$back_shoulder_width;
            $measure->front_jacket_length=$front_jacket_length;
            $measure->neck=$neck;
            $measure->throuser_length=$throuser_length;
            $measure->cuff=$cuff;
            $measure->back_length=$back_length;
            $measure->bust=$bust;
            $measure->point_bust=$point_bust;
            $measure->sleeve_length=$sleeve_length;
            $measure->arm=$arm;
            $measure->armHole=$armHole;
            $measure->coat_length=$coat_length;
            $measure->skirt_length=$skirt_length;
            $measure->hight_hip=$hight_hip;
            $measure->inseam=$inseam;
            $measure->seat=$seat;
            $measure->trouser_thigh=$trouser_thigh;
            $measure->save();

            return $measure;
        }

    }
    public function randomColor(){
        $colors = array("red", "orange", "green", "brown", "chocolate","crimson","darkmagenta","mediumslateblue","tomato");

        $randomIndex = array_rand($colors);
        $randomColor = $colors[$randomIndex];

        return $randomColor;
    }
}
