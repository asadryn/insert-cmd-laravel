<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\RegistrationController;
use App\Models\customer;
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
Route::get('/',[DemoController::class,'index']);
Route::get ('/register',[RegistrationController::class,'index']);

Route::post ('/register',[RegistrationController::class,'register']);

// Route::get('/customer',function(){
//     $customers =customer::all();
//     echo "<pre>";
//     print_r($customers);


// });
Route::get('/customer',[CustomerController::Class,'index'])
;

Route::post('/customer',[CustomerController::Class,'index'])
;