<?php

namespace App\Http\Controllers\Payment;
use Stripe;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Reservation;
use Exception;
use Illuminate\Http\Request;

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

                Reservation::create([
                    'reservedOf'=>$request->reservedOf,
                    'reservedTo'=>$request->reservedTo,
                    'payment_id'=>$payment->id
                ]);
              }
        }catch(Exception $e){
            return response()->json(['response'=>$e->getMessage()],500);
        }
    }
}
