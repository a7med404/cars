<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FiterController extends Controller
{
    public function filter(){
        return view('website.home.filter');
    }    
    
}
