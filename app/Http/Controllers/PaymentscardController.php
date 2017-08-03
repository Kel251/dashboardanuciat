<?php

namespace Anunciate\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PaymentscardController extends Controller
{
    public function postPaymentWithcard(Request $request) {
        //dd($request->all()); DEBUGEA LOS DATOS ENVIADOS
        $userid = Session::get('key');
        $user = Auth::loginUsingID($userid);
        //$user = $userid;
        $plan = 'monthly';
        
        $stripe_token = $request->input('stripeToken');
        $user->newSubscription('main',$plan)->create($stripe_token);
        
        //dd('success!');
        return Redirect('http://localhost:8180/anunciatec2/Control_Dashuser');
        
    }
}
