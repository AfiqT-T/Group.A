<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Display the feedback form with submitted feedback
    public function create()
    {
        $feedbacks = Feedback::latest()->get(); // Retrieve all feedback entries
        return view('feedback.form', compact('feedbacks')); // Pass data to the view
    }

    // Store submitted feedback
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|string|max:255',
            'user_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comments' => 'nullable|string',
        ]);

        Feedback::create([
            'order_id' => $request->order_id,
            'user_name' => $request->user_name,
            'contact_number' => $request->contact_number,
            'address' => $request->address,
            'rating' => $request->rating,
            'comments' => $request->comments,
        ]);

        return redirect()->route('feedback.thank-you')->with('success', 'Your feedback has been submitted successfully!');
    }

}
