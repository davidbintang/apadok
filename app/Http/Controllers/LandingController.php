<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function article()
    {
        return view('article.index');
    }

    public function articleDetail()
    {
        return view('article.detail');
    }
}
