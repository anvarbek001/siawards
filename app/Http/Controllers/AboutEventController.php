<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutEventController extends Controller
{
    public function index()
    {
        return view('aboutevent.index');
    }
}