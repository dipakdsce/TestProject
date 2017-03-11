<?php

namespace App\Http\Controllers;

use Request;

class UrlShorterController extends Controller
{
    public function index()
    {
        return view('UrlShorter.welcome');
    }

    public function login(Request $request)
    {

        $params = Request::all();
        dd($params);
    }

    public function shortUrl(Request $request)
    {
        $params = Request::all();
        dd($request);
    }

}
