<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function staticProducts()
    {
        return view('static/products');
    }
    public function staticProfile()
    {
        return view('static/profile');
    }
    public function staticEditProfile()
    {
        return view('static/profile-edit');
    }
    public function staticLogin()
    {
        return view('static/login');
    }
}
