<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bio;

class BioController extends Controller
{
    public function show()
	{
		$bios = Bio::all();
		
		return view('bio', compact('bios'));
	}
}
