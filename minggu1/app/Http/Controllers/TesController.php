<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    public function home()
    {
        return view('dashboard.home');
    }

    public function about()
    {
        return view('dashboard.about');
    }

    public function blog()
    {
        return view('dashboard.blog');
    }
}
