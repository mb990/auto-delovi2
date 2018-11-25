<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function usluge(){
    	return view('usluge');
    }

    public function kontakt(){
    	return view('kontakt');
    }

    public function proizvodi(){
    	return view('proizvodi');
    }

    public function about(){
    	return view('o-nama');
    }

    public function polisa(){
        return view('polisa');
    }

}
