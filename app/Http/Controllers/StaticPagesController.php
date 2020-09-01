<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('staticPages.home');
    }

    public function help()
    {
        return view('');
    }

    public function about(){

    }
}
