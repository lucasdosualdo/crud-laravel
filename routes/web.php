<?php

use Illuminate\http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Candidate;
use App\Http\Controllers\SignUpController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('/', function () {
        return view('welcome');
    });

    Route::post('/signup-candidate', [SignUpController::class, 'signUpCandidate']);
