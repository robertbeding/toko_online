<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.dashboard-product');
    }

    public function details()
    {
        return view('pages.dashboard-product-details');
    }

    public function create()
    {
        return view('pages.dashboard-product-create');
    }
}
