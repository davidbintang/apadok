<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    public function index()
    {
        return view('institution.dashboard');
    }

    public function peserta()
    {
        return view('institution.peserta');
    }

    public function detail()
    {
        return view('institution.detail');
    }

    public function screening()
    {
        return view('institution.screening');
    }

    public function disease()
    {
        return view('institution.disease');
    }

    public function stroke()
    {
        return view('institution.stroke');
    }

    public function kardiovaskular()
    {
        return view('institution.kardiovaskular');
    }

    public function diabetes()
    {
        return view('institution.diabetes');
    }

    public function chat()
    {
        return view('institution.chat');
    }
}
