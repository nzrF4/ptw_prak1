<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        return view("home");
    }
    public function faq(){
        return view("faq0258");
    }
    public function artikel(){
        return view("artikel0258");
    }
}