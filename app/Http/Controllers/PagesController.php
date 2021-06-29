<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "This is title";

        //return view('pages.home', ['title' => $title,]);
        return view('pages.home')->with('title', $title);
    }

    public function about() {            
        return view('pages.about');
    
    }

    public function contact() {            
        return view('pages.contact');

    }
}
