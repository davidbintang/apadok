<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function institutionList()
    {
        return view('admin.institution-list');
    }

    public function article()
    {
        return view('admin.article');
    }

    public function addArticle()
    {
        return view('admin.add-article');
    }

    public function editArticle()
    {
        return view('admin.edit-article');
    }
}
