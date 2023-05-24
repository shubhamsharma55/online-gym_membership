<?php

namespace App\Http\Controllers;

use App\Exports\ExportUsers;
use App\register;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;


class RegisterController extends Controller
{

    //excal export
    public function export(Request $request)
    {
        return Excel::download(new ExportUsers, 'allAttenExport.xlsx');
    }

    public function register(Request $request){
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:registers'],
                'phone' => ['required', 'string', 'max:10'],
                'password' => ['required', 'string', 'min:4', 'confirmed'],
            ]
        );
        $data = new register();
        $data->name            =  $request->name;
        $data->email           =  $request->email;
        $data->phone           =  $request->phone;
        $data->plan            =  $request->plan;
        $data->password        =  $request->password;

        if ($data->save()) {
            $details = [
                'title' => 'Mail from MAWAI.INFOTECH.com',
                'body' => 'This is for testing email using smtp'
            ];
            $a= new MyTestMail($details);
            
            Mail::to("shubhammawai275@gmail.com")->send($a);
            
            return redirect('/login')->with('Success', 'Registration Successfully Now Login');
        } else {
            return back()->with("failed", "Alert! Failed to register");
        }
        
    }
    public function choseplan($plan=null){
        $plan=$plan;
        return view('/registere')->with(compact('plan'));
    }

    public function tables()
    {
        $allData = register::all();
        return view('admin.admin', ['data' => $allData]);
    }
}
