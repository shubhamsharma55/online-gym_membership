<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;
use App\plan;
use App\PlanDescription;

class LoginController extends Controller
{
    public function check(Request $request){
        if($user = register::where(['email' => $request->email])->first()){
        $pass= $request->password;
        if($user->password==$pass){
                $expiring_date = $user->created_at;
                date_add($expiring_date, date_interval_create_from_date_string("30 days"));
                
            Session()->put('user', $user);
            $plan      = plan::where('plan', $user->plan)->first();
            $plan_desc = PlanDescription::where('plan_id', $plan->id)->get();

            // dd($user, $plan, $plan_desc);
            return view('plan', compact('plan', 'plan_desc', 'expiring_date'));
        }
        else{
            return redirect('/login')->with('failed1', 'Incorrect Email Or Password');
        }
    }
    else{
            return redirect('/login')->with('failed1', 'Incorrect Email Or Password');
    }
    }
}
