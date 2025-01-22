<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionApiController extends Controller
{
    public function index()
    {
        return response()->json(Question::all());
    }
}