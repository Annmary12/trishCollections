<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	setlocale(LC_MONETARY, 'en_NG');
    	return view('home.index');
    }
}
