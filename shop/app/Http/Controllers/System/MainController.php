<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('system.home',[
            'title' => 'System'
        ]);
    }
}
