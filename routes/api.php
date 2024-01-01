<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Inertia handles most routing for us, however, it does not handle in page requests such as the contact form submission without a redirect
// for this we need to create custom api routes for these in page requests. See below : 

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'contactFormSubmitted'])->name('contact.submit');