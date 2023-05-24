<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\plan;
use App\PlanDescription;

class PlanDescriptionController extends Controller
{
    public function create()
    {   
        $plan = plan::orderby('price', 'ASC')->get();
        return view('Admin.option', compact('plan'));
    }

    public function save(Request $request)
    {
        // dd($request->all());
        $data= new PlanDescription();
        $data->plan_id     =$request->plan_id;
        $data->plan_desc  = $request->plan_desc;
        if($data->save()){
            return back()->with('Success','Plan details submit successfully');
        }
        else{
            return back()->with('failed', 'Plan details not submited');
        }
    }
}
