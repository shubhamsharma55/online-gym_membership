<?php

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home view..
Route::get('/', 'HomeController@index');


// //plan view
// Route::get('/plan', function () {
//     return view('plan');
// });

// //silver plan
// Route::get('/plan2', function () {
//     return view('plan2');
// });

// //golden  plan
// Route::get('/plan3', function () {
//     return view('plan3');
// });


//login view
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/logout', function () {
    Session()->flush('user');
    return redirect('/login')->with('Success', 'Logout Successfully');
});

//sing-up view
// Route::get('/registere/{plan?}', function () {
//     return view('registere');
// });
Route::post('/admin', 'RegisterController@export');

//for after click creat account
Route::post('/registere', 'RegisterController@register');

//check password
Route::post('/plan', 'LoginController@check');


//to chose plan
Route::get('/registere/{plan?}', 'RegisterController@choseplan');

//Admin  panal
Route::get('/admin', function () {
    return view('Admin.admin');
});

Route::get('/planadmin', function () {
    return view('Admin.planadmin');
});


Route::get('/planoption', 'PlanDescriptionController@create');
Route::post('/planoption/save','PlanDescriptionController@save');



Route::get('/admin', 'RegisterController@tables');
Route::POST('/admin/plan/create', 'PlanController@create');


// Route::get('send-mail', function () {

//     $details = [
//         'title' => 'Mail from MawaiInfoTech.com',
//         'body' => 'This is for testing email using smtp'
//     ];

//     Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));

//     dd("Email is Sent.");
// });