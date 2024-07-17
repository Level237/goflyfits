<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store()
    {
        $name=Session::get('name');
        $email=Session::get('email');
        $password=Session::get('password');
        $phone_number=Session::get('phone_number');
        $town=Session::get('town');
        $preferences=Session::get('preferences');
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'town'=>$town,
            'phone_number'=>$phone_number,
            'color'=>$this->randomColor(),
            'role_id'=>2,
            'isChoice'=>1
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
            return to_route("customer.dashboard");
        }
    }

    public function randomColor(){
        $colors = array("red", "orange", "green", "brown", "chocolate","crimson","darkmagenta","mediumslateblue","tomato");

        $randomIndex = array_rand($colors);
        $randomColor = $colors[$randomIndex];

        return $randomColor;
    }
}
