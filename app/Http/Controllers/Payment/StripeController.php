<?php

namespace App\Http\Controllers\Payment;
use Stripe;
use App\Http\Controllers\Controller;
use App\Models\Clothing;
use App\Models\Payment;
use App\Models\Reservation;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StripeController extends Controller
{
    public function pay(Request $request){

        try{

            $stripe = new \Stripe\StripeClient(env("STRIPE_SECRET"));

            $res=$stripe->tokens->create([
                'card' => [
                    'number' =>$request->card_number,
                    'exp_month' =>$request->exp_month,
                    'exp_year' =>$request->exp_year,
                    'cvc' => $request->cvc,
                ]
            ]);

            Stripe\Stripe::setApiKey(env("STRIPE_SECRET"));

            $response=$stripe->charges->create([
                'amount' =>$request->price,
                'currency' => 'usd',
                'source' => $res->id,
                'description' => $request->description
              ]);

              if($response->status=='succeeded'){

                $payment=Payment::create([
                    'user_id'=>auth()->user()->id,
                    'price'=>$request->price,
                    'means_payment'=>"visa",
                    "clothing_id"=>$request->clothing_id
                ]);

                Session::put('confirm',true);
                Session::save();
                $reservation=Reservation::create([
                    'reservedOf'=>$request->reservedOf,
                    'reservedTo'=>$request->reservedTo,
                    'payment_id'=>$payment->id,
                    "reservedOf"=>date("Y-m-d"),
                    "reservedTo"=>date('Y-m-d', strtotime("+1 day"))
                ]);

                return to_route('confirm.stripe')->with(['clothing_id'=>$request->clothing_id,'reservation_id'=>$reservation->id]);
              }
        }catch(Exception $e){
            return response()->json(['response'=>$e->getMessage()],500);
        }
    }

    public function confirmStripe()
    {
        if(Session::has('confirm')){

            $clothing_id=Session::get('clothing_id');
            $reservation=Reservation::find(Session::get('reservation_id'));
            $clothing=Clothing::find($clothing_id);
            Session::forget('confirm');
            return view('clothings.confirm',compact("clothing","reservation"));
        }else{

            return back();
        }

    }
}
