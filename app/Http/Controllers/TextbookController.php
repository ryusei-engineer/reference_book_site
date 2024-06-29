<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Textbook;

class TextbookController extends Controller
{
    public function index()
    {
        $textbooks = Textbook::all();
        return view('textbooks.index', compact('textbooks'));
    }

    public function create()
    {
        return view('textbooks.create');
    }

    public function confirm(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
        ]);

        return view('textbooks.confirm', ['textbook' => $validated]);
    }

    public function store(Request $request)
    {
        $textbook = new Textbook();
        $textbook->booktitle = $request->input('title');
        $textbook->author = $request->input('author');
        $textbook->publisher = $request->input('publisher');
        $textbook->isbn = "1234567890123"; // 13桁のISBNコードを入れる テスト用
        $textbook->save();

        return redirect()->route('textbooks.complete');
    }

    public function complete()
    {
        return view('textbooks.complete');
    }

    public function show($id)
    {
        $textbook = Textbook::find($id);
        return view('textbooks.show', compact('textbook'));
    }
}
