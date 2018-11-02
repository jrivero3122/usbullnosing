<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentsController extends Controller
{
    public function home()
    {
        $page = [];
        $page['title'] = 'Us Bullnosing';
        return view('home', $page);
    }
}
