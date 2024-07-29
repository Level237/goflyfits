<?php

namespace App\Http\Controllers\Backend\Customer;

use App\Http\Controllers\Controller;
use App\Models\Clothing;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(Request $request){
        $clothing=Clothing::find($request->clothing_id);
        //return $clothing;
        return view('clothings.booking',compact('clothing'));
    }
}
