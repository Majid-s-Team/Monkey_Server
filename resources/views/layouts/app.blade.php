<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        .content {
            margin-left: 260px;
            padding: 20px;
        }

        @media (max-width: 768px) {
            .content {
                margin-left: 0;
            }

            #sidebarToggle {
                display: block;
                position: absolute;
                top: 20px;
                left: 20px;
                z-index: 999;
            }
        }
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <!-- <button class="btn btn-primary d-md-none" id="sidebarToggle">☰ Menu</button> -->

    @include('layouts.sidebar')

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
