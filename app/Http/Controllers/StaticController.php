<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function staticProducts()
    {
        return view('static/products');
    }
}
