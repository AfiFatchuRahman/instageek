<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
	{
		$nama = "Afif";
		$umur = 23;
		
		return view('index');
	}
}
