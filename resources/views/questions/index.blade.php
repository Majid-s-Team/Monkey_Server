@extends('layouts.app')

@section('title', 'Manage Questions')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Questions List</h2>
        <a href="{{ route('questions.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add Question
        </a>
    </div>
    
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Question</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $question)
                <tr>
                    <td>{{ $question->id }}</td>
                    <td>{{ $question->question }}</td>
                    <td>
                        <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form method="POST" action="{{ route('questions.destroy', $question->id) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
