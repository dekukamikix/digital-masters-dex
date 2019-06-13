<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DigiSkillController extends Controller
{
    // code..
    public function index($id)
    {
    	# code...
    	$skillData = DB::table('skill_info')->where('id_digimon', $id)->first();
    	return view('skilldata', ['skilldata' => $skillData]);
    	// return json_encode($skillData);
    }
}
