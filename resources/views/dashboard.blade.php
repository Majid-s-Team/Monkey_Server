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
        <table class="table table-bordered table-striped mt-3" id="questionsTable">
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

        <!-- Pagination (Handled by DataTables) -->
    </div>

    <head>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <!-- Include DataTable CSS and JS -->
        <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    </head>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .stat-value {
            font-weight: bold;
            font-size: 2rem;
            text-align: center;
            color: white;
        }

        /* DataTables Default Pagination Style */
        .dataTables_paginate .paginate_button {
            background-color: #f1f1f1;
            color: #333;
            border-radius: 3px;
            padding: 5px 10px;
            margin: 0 2px;
        }

        .dataTables_paginate .paginate_button:hover {
            background-color: #ccc;
            color: #000;
        }

        .dataTables_length select {
            width: auto;
            display: inline-block;
            margin-right: 10px;
        }
        #questionsTable{
            padding-top: 10px !important;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('#questionsTable').DataTable({
                "pagingType": "full_numbers", 
                "pageLength": 5 // Set the number of records per page (same as in controller pagination)
            });
        });
    </script>
@endsection
