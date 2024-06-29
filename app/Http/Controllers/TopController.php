<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Textbook;

class TopController extends Controller
{
    public function index()
    {
        $textbooks = Textbook::all();
        return view('index', compact('textbooks'));
    }
}
