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

    public function editCandidate ($candidate_id) {
        $candidate = Candidate::findOrFail($candidate_id);
        return view('update_candidate', ['candidate'=>$candidate]);
    }

    public function updateCandidate (Request $request, $candidate_id) {
        $candidate = Candidate::findOrFail($candidate_id);
        $candidate->name = $request->candidate_name;
        $candidate->phone = $request->candidate_phone;
        $candidate->save();
        echo "success to update candidate";
    }

    public function deleteCandidate ($candidate_id) {
        $candidate = Candidate::findOrFail($candidate_id);
        $candidate->delete(); 
        echo "success to delete candidate";
    }
}
