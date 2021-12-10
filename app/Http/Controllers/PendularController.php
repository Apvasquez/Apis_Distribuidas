<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendularController extends Controller
{
    public function index(){
        return view('pages.pendulo');
    }
}