<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PiglyController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
