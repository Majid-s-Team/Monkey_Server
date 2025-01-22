@extends('layouts.app')

@section('title', 'Edit Question')

@section('content')
    <h2>Edit Question</h2>
    <form method="POST" action="{{ route('questions.update', $question->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Question</label>
            <input type="text" name="question" class="form-control" value="{{ $question->question }}" required>
        </div>
        <button type="submit" class="btn btn-warning">
            <i class="fas fa-edit"></i> Update
        </button>
        <a href="{{ route('questions.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
