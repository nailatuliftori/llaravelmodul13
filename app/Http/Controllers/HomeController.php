<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //kode baru
    function index()
    {
        $pageTitle = 'Home';
        return view('home', ['pageTitle' => $pageTitle]);
    }
}
