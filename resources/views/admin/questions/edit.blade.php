@extends('layouts.admin')

@section('content')
    <h4>Add Question</h4>
    <form method="POST" action="{{ route('questions.store') }}" class="mb-4">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <input type="text" name="question" class="form-control" placeholder="Enter Question" required>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-success w-100">Add Question</button>
            </div>
        </div>
    </form>
@endsection
