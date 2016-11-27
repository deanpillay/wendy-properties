<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function index() {
    	if(View::exists('pages.index'))
    		return view('pages.index');
    	else
    		return 'No view available';
    }

    public function search(){
        return view('pages.search');
    }

    public function results(){
        return view('pages.results');
    }

    public function details(){
        return view('pages.details');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function profile() {
        return view('pages.profile');
    }

    public function settings()
    {
        return view('pages.settings');
    }

}

