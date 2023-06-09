<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function show(string $id)
    {
        // Fetch all reviews from the database
        $reviews = Review::where('doctor_id', $id)->get();
        $doctor = Doctor::find($id);
        return view('reviews', ['reviews' => $reviews, 'doctor' => $doctor]);
    }
}
