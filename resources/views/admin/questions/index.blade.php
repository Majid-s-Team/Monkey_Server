@extends('layouts.admin')

@section('content')
    <h4>List of Questions</h4>
    <a href="{{ route('questions.create') }}" class="btn btn-primary mb-3">Add Question</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Question</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $question)
                <tr>
                    <td>{{ $question->id }}</td>
                    <td>{{ $question->question }}</td>
                    <td>
                        <form method="POST" action="{{ route('questions.toggle', $question->id) }}">
                            @csrf
                            <button class="btn btn-sm {{ $question->status ? 'btn-success' : 'btn-secondary' }}">
                                {{ $question->status ? 'Active' : 'Inactive' }}
                            </button>
                        </form>
                    </td>
                    <td>
                        <!-- Edit Button (opens popup) -->
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editQuestionModal{{ $question->id }}">Edit</button>

                        <!-- Delete Form -->
                        <form method="POST" action="{{ route('questions.destroy', $question->id) }}" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Edit Question Modal -->
    @foreach($questions as $question)
        <div class="modal fade" id="editQuestionModal{{ $question->id }}" tabindex="-1" aria-labelledby="editQuestionModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route('questions.update', $question->id) }}">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="editQuestionModalLabel">Edit Question</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="text" name="question" value="{{ $question->question }}" class="form-control" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
