<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Textbook;
use App\Models\Review;
use App\Models\Category;

class TextbookController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $category_id = $request->input('category_id');

        $textbooks = Textbook::where('booktitle', 'like', "%$keyword%");

        if (!empty($category_id)) {
            $textbooks = $textbooks->where('category_id', $category_id); //->paginate(1);
        }

        $textbooks = $textbooks->get(); //->paginate(1);

        $categories = Category::all();
        $reviews = Review::limit(5)->get();
        return view('index', compact('textbooks', 'categories', 'reviews'));
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

    public function show(Request $request, $id)
    {
        $textbook = Textbook::find($id);
        $rating =  $request->input('rating');
        $sorted = $request->input('sorted');

        if (!empty($rating) || $rating != 0) {
            $query = Review::where(['textbook_id' => $id, 'rating' => $rating]);
        } else {
            $query = Review::where('textbook_id', $id);
        }

        if ($sorted == "asc") {
            $reviews = $query->orderBy('created_at', 'asc')->get();
        } else {
            $reviews = $query->orderBy('created_at', 'desc')->get();
        }

        return view('textbooks.show', compact('textbook', 'reviews'));
    }

    public function search(Request $request) {
        $textbooks = Textbook::all();
        $test = [];
        foreach ($request->input('categories') as $value) {
            $test = $value;
        }

        //$test = $request->input('categories');
        return view('textbooks.search', compact('textbooks', 'test'));
    }
}
