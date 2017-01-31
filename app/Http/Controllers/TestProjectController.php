<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use TestProject;

class TestProjectController extends Controller
{
    public function index()
    {
        return view('TestProject.welcome');
    }

    public function login()
    {
        return TestProject::login(Request::all());
    }
}
