<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(){

        $reservations=Reservation::join('payments','payments.id','reservations.payment_id')
        ->join('clothing','clothing.id','payments.clothing_id')
        ->join('users','users.id','payments.user_id')
        ->join('category_clothing','category_clothing.clothing_id','clothing.id')
        ->join('categories','categories.id','category_clothing.category_id')
        ->select('categories.category_title','clothing.clothing_profile','clothing.title','clothing.price','clothing.slug','reservedOf','reservedTo')
        ->where('users.id',auth()->user()->id)
        ->get();

        //return $reservations;
        return view('customer.reservations',compact('reservations'));
    }
}
