<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SweetController extends Controller
{
    function index(){
    return view('index');
    }
}