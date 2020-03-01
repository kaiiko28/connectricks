<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $product = Products::skip(0)->take(20)->get();
        $category = Products::select('category')
        ->groupBy('category')
        ->get();
        return view('landing.index',compact('product','category'));
    }

}
