<?php

use App\Http\Controllers\CustomerController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('customer.index');
})->name('home');


Route::resource('customers',CustomerController::class);

// Route::get('/test-customers', function () {
//     return customer::count();
// }); 
