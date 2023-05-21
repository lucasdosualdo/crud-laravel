<?php

use Illuminate\http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CandidateController;


    Route::get('/', function () {
        return view('welcome');
    });

    Route::post('/signup-candidate', [CandidateController::class, 'signUpCandidate']);
    Route::get('/show-candidate/{candidate_id}', [CandidateController::class, 'showCandidate']);
