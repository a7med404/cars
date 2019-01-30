<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('website.home.index');
    }

    public function search(){
        return view('website.home.index');
    }
}
