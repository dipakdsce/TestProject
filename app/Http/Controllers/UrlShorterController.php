<?php

namespace App\Http\Controllers;

use Request;
use Facades\App\Services\UrlShorterService;

class UrlShorterController extends Controller
{
    public function index()
    {
        return view('UrlShorter.welcome');
    }

    public function signUp()
    {
        $params = Request::all();
        return UrlShorterService::signUp($params);
    }

    public function login()
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
