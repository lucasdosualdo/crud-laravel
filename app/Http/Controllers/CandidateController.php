<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller
{
    public function signUpCandidate(Request $request) {
       Candidate::create([
        'name'=>$request->candidate_name,
        'phone'=>$request->candidate_phone
       ]);
       echo "success";
    }

    public function showCandidate ($candidate_id) {
        $candidate = Candidate::findOrFail($candidate_id);
        echo $candidate->name;
        echo "<br/>";
        echo $candidate->phone;
    }
}
