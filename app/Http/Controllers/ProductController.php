<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        return view('product/product');
    }

    public function create()
    {
        return view('product/create');
    }

    public function show()
    {
        return view('product/show');
    }
}