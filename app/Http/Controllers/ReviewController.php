<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->query('status');
        $reviews = $status ? Review::where('status', $status)->get() : Review::all();
        return response()->json($reviews);
    }

    public function show($id)
    {
        $review = Review::findOrFail($id);
        return response()->json($review);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'jet_id' => 'required|exists:jets,id',
            'reviewer_name' => 'required|string',
            'text' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $review = Review::create($validated);
        return response()->json(['message' => 'Review created successfully', 'review' => $review], 201);
    }

    public function changeStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,approved,declined',
        ]);

        $review = Review::findOrFail($id);
        $review->update(['status' => $validated['status']]);
        return response()->json(['message' => 'Review status updated', 'review' => $review]);
    }
}
