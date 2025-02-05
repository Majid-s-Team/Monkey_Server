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
                <th>Status</th>  <!-- New column for status -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $question)
                <tr>
                    <td>{{ $question->id }}</td>
                    <td>{{ $question->question }}</td>
                    <td>
                        <!-- Display status as badge -->
                        <span class="badge 
                            @if($question->status == 1)
                                bg-success
                            @else
                                bg-danger
                            @endif">
                            {{ $question->status == 1 ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td>
                        <!-- Toggle status button -->
                        <form method="POST" action="{{ route('questions.toggleStatus', $question->id) }}" style="display:inline;">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-sm 
                                @if($question->status == 1) 
                                    btn-danger 
                                @else 
                                    btn-success 
                                @endif">
                                <i class="fas fa-sync"></i> Status
                            </button>
                        </form>
                        
                        <!-- Edit Button -->
                        <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form method="POST" action="{{ route('questions.destroy', $question->id) }}" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this question?');">
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
<head><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    body {
    font-family: 'Poppins', sans-serif;
   
}
</style>