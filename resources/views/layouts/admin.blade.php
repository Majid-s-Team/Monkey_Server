<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            display: flex;
            flex-direction: column;
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: #f4f4f9;
        }

        .sidebar {
            width: 250px;
            height: 100%;
            background: #34495e;
            color: white;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            animation: slideIn 1s ease-out;
            box-shadow: 3px 0px 10px rgba(0, 0, 0, 0.2);
        }

        @keyframes slideIn {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }

        .sidebar h4 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px;
            margin-bottom: 12px;
            border-radius: 6px;
            transition: background 0.3s ease;
            font-size: 16px;
        }

        .sidebar a:hover {
            background: #2c3e50;
            transition: 0.2s;
        }

        .sidebar a.active {
            background: #2980b9;
        }

        .content {
            flex-grow: 1;
            margin-left: 250px;
            padding: 20px;
            overflow-y: auto;
        }

        .header {
            background: #ecf0f1;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 8px;
        }

        .header h3 {
            margin: 0;
            font-size: 24px;
        }

        .btn-danger {
            background-color: #e74c3c;
            border-color: #c0392b;
        }

        .btn-danger:hover {
            background-color: #c0392b;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                display: none;
            }

            .content {
                margin-left: 0;
            }

            .sidebar.active {
                display: block;
            }

            .sidebar a {
                padding: 10px;
                font-size: 14px;
            }
        }

        .navbar-toggler-icon {
            background-color: #34495e;
        }

    </style>
</head>
<body>

    <!-- Navbar with hamburger menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-lg-none">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#addQuestion">Add Question</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#listQuestions">List Questions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.profile') }}">Edit Profile</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar -->
    <!-- Sidebar -->
<div class="sidebar d-none d-lg-block">
    <h4>Admin Panel</h4>
    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <i class="fas fa-tachometer-alt"></i> Dashboard
    </a>
    <a href="{{ route('questions.create') }}" class="{{ request()->routeIs('questions.create') ? 'active' : '' }}">
        <i class="fas fa-plus-circle"></i> Add Question
    </a>
    <a href="{{ route('questions.index') }}" class="{{ request()->routeIs('questions.index') ? 'active' : '' }}">
        <i class="fas fa-list-ul"></i> List Questions
    </a>
    <a href="{{ route('admin.profile') }}" class="{{ request()->routeIs('admin.profile') ? 'active' : '' }}">
        <i class="fas fa-user-circle"></i> Edit Profile
    </a>
    <!-- <a href="{{ route('logout') }}" class="text-danger">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a> -->
</div>


    <!-- Main Content -->
    <div class="content">
        <div class="header">
            <div>
                <h3>Welcome to the Admin Dashboard</h3>
                <p>Total: {{ $totalQuestions }}, Active: {{ $activeQuestions }}, Inactive: {{ $inactiveQuestions }}</p>
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>

        @yield('content') 
    </div>

    <script>
        // JavaScript to toggle the sidebar visibility on mobile
        document.querySelector('.navbar-toggler').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });
    </script>

</body>
</html>
