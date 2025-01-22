@extends('layouts.app')

@section('title', 'Delete Question')

@section('content')
    <h2>Delete Question</h2>
    <p>Are you sure you want to delete this question?</p>
    <form method="POST" action="{{ route('questions.destroy', $question->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">
            <i class="fas fa-trash"></i> Yes, Delete
        </button>
        <a href="{{ route('questions.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
