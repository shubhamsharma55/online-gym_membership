<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\plan;

class PlanController extends Controller
{
    public function create(Request $request){
        $data = new plan();
        $data->plan            =$request->plan;
        $data->price           =$request->price;
        // $data->plandetails     =$request->plandetails;
        if ($data->save()) {
            return back()->with('Success', 'Plan Add Successfully');
        } else {
            return back()->with("failed", "Alert! Failed to register");
        }

    }
}
