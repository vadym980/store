<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('front.pages.main');
    }

    public function category()
    {
        return view('front.pages.category');
    }

    public function product()
    {
        return view('front.pages.product');
    }
}
