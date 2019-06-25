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
        $soulData = DB::table('soul_data')->where('id_digimon', $id)->first();
    	if ($skillData == null) {
    		# code...
    		return abort(404);
    	} else 
        $data = ['skilldata' => $skillData, 'soulData' => $soulData];
    	return view('skilldata', $data);
    	// return json_encode($skillData);
    }
}
