<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contactUs()
    {
        
        return view('FrontEnd.globalPages.contactUs');
    }
    public function terms()
    {
        
        return view('FrontEnd.globalPages.terms');
    }
}
