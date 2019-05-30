<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DigimonsController extends Controller
{
    public function list() {
    	$digimons = DB::table('digimon')->get();
    	return view ('listdigimons', ['digimons' => $digimons]);
    }
    public function calculate()
    {
    	$evo_digi = DB::table('test')->groupBy('f1')->get();
    	// echo print_r($evo_digi);
    	// exit();
    	return view('shardscalculations')->with('evo_digi', $evo_digi);
    }
    public function tentang()
    {
    	return view('about');

    }
    
    // public function fetch(Request $request)
    // {
    // 	# code...
    // }

    public function evolution($id)
    {
        # code...
        $evolutionData = DB::table('test')->where('f1',$id)->select('f2','f3','f4')->get();
        $evolutionDataLength  = sizeof($evolutionData);
        $evolutionData2 = DB::table('test')->where('f2',$id)->select('f3','f4')->get();
        $evolutionData2Length = sizeof($evolutionData2);
        $evolutionData3 = DB::table('test')->where('f3',$id)->select('f4')->get();
        $evolutionData3Length = sizeof($evolutionData3);
        if ($evolutionDataLength > 0 ) { 
        echo json_encode($evolutionData[0]);
        exit;
        } else if ($evolutionData2Length > 0) { 
            echo json_encode($evolutionData2[0]);
            exit;
        } else if($evolutionData3Length > 0) {
            echo json_encode($evolutionData3[0]);
            exit;

        }
 
    }
}
