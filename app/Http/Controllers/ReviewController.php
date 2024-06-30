<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Textbook;
use App\Models\Review;

class ReviewController extends Controller
{

    public function index() {
        $reviews = Review::all()->sortByDesc('created_at');
        return view('reviewtest', compact('reviews'));
    }

    public function store(Request $request, $id)
    {
        $validated = $request->validate([
            'reviewtitle' => 'required|string|max:255',
            'review' => 'required|string|max:255',
            'rating' => 'required|integer|between:1,5',
        ]);

        $textbook = Textbook::find($id);
        $review = new Review();
        $review->textbook_id = $textbook->id;
        $review->reviewtitle = $validated['reviewtitle'];
        $review->review = $validated['review'];
        $review->rating = $validated['rating'];
        $review->save();

        return redirect()->route('textbooks.show', compact('id'));
    }

}
