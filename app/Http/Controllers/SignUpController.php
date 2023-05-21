<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class SignUpController extends Controller
{
    public function signUpCandidate(Request $request) {
       Candidate::create([
        'name'=>$request->candidate_name,
        'phone'=>$request->candidate_phone
       ]);
       echo "deu bom";
    }
}
