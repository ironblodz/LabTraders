<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function master(){
        return view('master');
    }
    
    public function index(){
        return view('gm.index');
    }

    public function contact(){
        return view ('gm.contact');
    }

    }


