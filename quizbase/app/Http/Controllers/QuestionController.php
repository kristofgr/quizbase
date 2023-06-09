<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }

    /**
     * Create a resource in storage.
     */
    public function create()
    {
        return view('question.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        QuestionController::create($request->validated());
        return redirect()->routes('question.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        return view('question.show', compact('question'));
    }

    /**
     * Edit the specified resource in storage.
     */
    public function edit(Request $request, Question $question)
    {
        return view('question.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        $question->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('question.index');
    }
}
