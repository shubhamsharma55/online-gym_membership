<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\plan;
use App\PlanDescription;

class HomeController extends Controller
{
    public function index(){
        $plan      = plan::get();
        $plan_desc = PlanDescription::get();

        return view('index', compact('plan', 'plan_desc'));
    }
}
