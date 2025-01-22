<?php
namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
        ]);
        Question::create($request->all());
        return redirect()->route('questions.index');
    }

    public function edit(Question $question)
    {
        return view('questions.edit', compact('question'));
    }

    public function update(Request $request, Question $question)
    {
        $request->validate([
            'question' => 'required|string|max:255',
        ]);
        $question->update($request->all());
        return redirect()->route('questions.index');
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('questions.index');
    }
}
