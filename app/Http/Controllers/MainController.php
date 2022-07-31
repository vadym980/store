<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('front.pages.main');
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('front.pages.category', compact('category'));
    }

    public function categories()
    {
        $categories = Category::all();
        return view('front.pages.categories', compact('categories'));
    }

    public function product($slug)
    {
        return view('front.pages.product');
    }
}
