@extends('layouts.app')

@section('title', 'Add Question')

@section('content')
    <h2>Add New Question</h2>
    <form method="POST" action="{{ route('questions.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Question</label>
            <input type="text" name="question" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i> Save
        </button>
        <a href="{{ route('questions.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
