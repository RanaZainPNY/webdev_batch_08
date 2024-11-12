<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function index()
    {
        return view('web.index');
    }
    public function shop()
    {
        return view('web.shop');
    }
    public function master()
    {
        return view('web.webmaster');
    }
}
