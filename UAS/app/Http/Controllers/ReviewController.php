<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        // Fetch all reviews from the database
        $reviews = Review::all();

        return view('reviews', compact('reviews'));

    }
}
