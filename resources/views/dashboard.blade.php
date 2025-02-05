@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container mt-5">
        <h2>Dashboard Statistics</h2>
        <div class="row mt-4">
            <!-- Total Questions Box -->
            <div class="col-md-4 mb-3">
                <div class="card text-white bg-primary h-100">
                    <div class="card-header">
                        <h5>Total Questions</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text stat-value">{{ $totalQuestions ?? 'Loading...' }}</p>
                    </div>
                </div>
            </div>

            <!-- Active Questions Box -->
            <div class="col-md-4 mb-3">
                <div class="card text-white bg-success h-100">
                    <div class="card-header">
                        <h5>Active Questions</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text stat-value">{{ $activeQuestions ?? 'Loading...' }}</p>
                    </div>
                </div>
            </div>

            <!-- Inactive Questions Box -->
            <div class="col-md-4 mb-3">
                <div class="card text-white bg-danger h-100">
                    <div class="card-header">
                        <h5>Inactive Questions</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text stat-value">{{ $inactiveQuestions ?? 'Loading...' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Questions List -->
        <h3 class="mt-5">Questions List</h3>
        <table class="table table-bordered table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($questions as $question)
                    <tr>
                        <td>{{ $question->id }}</td>
                        <td>{{ $question->question }}</td>
                        <td>
                            <span class="badge 
                                @if($question->status == 1) 
                                    bg-success
                                @else
                                    bg-danger
                                @endif">
                                {{ $question->status == 1 ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<head><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

    <style>
body {
    font-family: 'Poppins', sans-serif;
   
}        .stat-value {
            font-weight: bold;
            font-size: 2rem;
            text-align: center;
            color: white;
        }
    </style>
@endsection
