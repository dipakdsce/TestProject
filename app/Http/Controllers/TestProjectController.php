<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
//use Illuminate\Support\Facades\Request;
use Request;
use TestProject;
use Countries;

class TestProjectController extends Controller
{
    public function index()
    {
        dd(Countries::where('name.common', 'India'));
        return view('TestProject.welcome');
    }

    public function login(Request $request)
    {
        dd($_COOKIE);
       var_dump(Cookie::get('username'));
        $params = Request::all();
        if(isset($params['userNameSignUp']))
        {
            if($params['passwordSignUp'] === $params['passwordSignUpConfirm'])
            {
                return TestProject::signUp($params);
            }
            else
            {
                return 'Please enter same value in Confirm password as password';
            }

        }
        else
        {
            return TestProject::login($params);
        }
    }
}
