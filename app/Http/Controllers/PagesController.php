<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home() 
    {
    	return view('index');
    }

    public function about()
    {
    	return view('about', ['nama' => 'Dwiki Ganteng']);
    }
}
