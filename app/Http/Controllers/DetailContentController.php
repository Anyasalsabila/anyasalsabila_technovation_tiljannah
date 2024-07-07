<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailContentController extends Controller
{
    public function index(Request $request)
    {
        // Use the $request object here if needed
        return view('detailContent');
    }
}
