<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        $title = 'Laravel Course';
        return view('products.index', compact('title'));
    }
    public function detail()
    {
        $title = 'Laravel Course';
        return view('products.detail');
    }
}
