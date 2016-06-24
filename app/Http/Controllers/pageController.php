<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pageController extends Controller
{
    
    public function home()
    {
    	return view('pages.home');
    }

    public function about(){

	    $contributor = ['Ashwini', 'geek.ashwini@gmail.com', 'ashwini0529'];
    	return view('pages.about', compact('contributor'));
    }
}
