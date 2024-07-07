<?php

use App\Http\Controllers\Controller;
use App\Models\Content;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::all();
        return view('Content', compact('contents'));
    }
}
