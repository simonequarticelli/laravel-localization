<?php

namespace App\Http\Controllers;

use App;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        App::setLocale('it');
        return view('home');
    }
}
