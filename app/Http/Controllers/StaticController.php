<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
     public function index  () {
        return view('welcome');
    }

    // public function create  () {
    //     return view('create');
    // }

    // public function contact  () {
    //     return view('contact');
    // }

    
}
