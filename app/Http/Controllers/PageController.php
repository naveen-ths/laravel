<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller {
    
    public function home()
    {
        return view('frontend.pages.home');
    }
    
}