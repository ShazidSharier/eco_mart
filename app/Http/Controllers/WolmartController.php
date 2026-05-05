<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WolmartController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }
}
