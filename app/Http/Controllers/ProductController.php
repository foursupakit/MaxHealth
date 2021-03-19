<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return view('product.product-list');
    }

    public function edit(Request $request)
    {
        return view('product.product-edit');
    }

    public function category(Request $request)
    {
        return view('product.product-category-list');
    }

    public function create(Request $request)
    {
        return view('product.product-create');
    }
}
