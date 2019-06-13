<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigiInputController extends Controller
{
    // code ...
	public function skill()
	{
		# code...
		return view('input/iskill');
	}

	public function digimon()
	{
		# code...
		return view('input/idigimon');
	}

	public function evolution()
	{
		# code...
		return view('input/ievo');
	}
}
