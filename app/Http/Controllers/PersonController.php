<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    //
    public function create(Request $request)
    {
        $person = Person::create($request->all());
        return response()->json($person, 201);
        // personservice()
    }
}
