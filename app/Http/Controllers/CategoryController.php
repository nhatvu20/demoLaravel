<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function update(Request $request)
    {
        // $category = $request->route('category');
        return redirect()->route('category.update');
        // $category này chính là category có id = 1 trong database
    }
}
