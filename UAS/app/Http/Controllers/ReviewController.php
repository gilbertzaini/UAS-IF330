<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function show(string $id)
    {
        $reviews = Review::where('doctor_id', $id)->get();
        $doctor = Doctor::find($id);
        return view('reviews', ['reviews' => $reviews, 'doctor' => $doctor]);
    }

    public function store(request $request){
        $request->validate([
            'doctor_id'=>'required|string',
            'user_id'=>'required|string',
            'ulasan'=>'required|string',
        ]);

        $review = new Review;
        $review->doctor_id = $request->doctor_id;
        $review->user_id = $request->user_id;
        $review->ulasan = $request->ulasan;
        $review->save();
        
        return redirect()->route('review.show', ['id'=>$request->doctor_id]);
    }
}
