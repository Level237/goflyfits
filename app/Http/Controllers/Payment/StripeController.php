<?php

namespace App\Http\Controllers\Payment;
use Stripe;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function pay(Request $request){

        try{

            $stripe = new \Stripe\StripeClient(env("STRIPE_SECRET"));

            $res=$stripe->tokens->create([
                'card' => [
                    'number' =>$request->number,
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
        }catch(Exception $e){
            return response()->json(['response'=>$e->getMessage()],500);
        }
    }
}
