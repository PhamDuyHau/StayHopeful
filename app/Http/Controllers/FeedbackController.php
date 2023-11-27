<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Sensitive;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedback = Feedback::all();
        $sensitives_word = Sensitive::all();
        $words = $sensitives_word->pluck('word');
        return view("frontend.feedback.index",compact('feedback','words'));
    }
    public function create()
    {
        return view("frontend.feedback.feedback");
    }
    public function store(Request $request) {
        $request->validate([
            'email'=>'bail|required|email',
            'content'=>'required',
            'star'=>'required',
        ]);
        Feedback::create($request->all());
        return redirect()->back()->with('success','Thanks for your feedback.');
    }
    public function detail($id) {
        $feedback = Feedback::find($id);
        $sensitives_word = Sensitive::all();
        $words = $sensitives_word->pluck('word');
        return view('frontend.feedback.detail', compact('feedback','words'));
    }
}
