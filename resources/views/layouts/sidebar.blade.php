<div class="sidebar bg-dark d-flex flex-column">
   <div style="text-align: center;">  
      <img src="{{ asset('storage/monkey.png') }}" alt="Dashboard Logo" 
           class="text-center py-3" style="width: 100px; height: 100px; object-fit: contain; padding: 10px 0;">
   </div>
   
   <!-- Dashboard Link -->
   <a href="{{ route('dashboard') }}" class="text-white py-2 px-3 d-flex align-items-center @if(request()->routeIs('dashboard')) active @endif">
      <i class="fas fa-tachometer-alt me-2"></i> Dashboard
   </a>
   
   <!-- Profile Link with Icon -->
   <a href="{{ route('profile.view') }}" class="text-white py-2 px-3 d-flex align-items-center @if(request()->routeIs('profile.view')) active @endif">
   <i class="fas fa-user me-2"></i> Profile
</a>

   <!-- Manage Questions Link with Icon -->
   <a href="{{ route('questions.index') }}" class="text-white py-2 px-3 d-flex align-items-center @if(request()->routeIs('questions.index')) active @endif">
      <i class="fas fa-list me-2"></i> Manage Questions
   </a>
   
   <!-- Logout Link with Icon -->
   <a href="{{ route('logout') }}" class="text-white py-2 px-3 d-flex align-items-center" 
      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      <i class="fas fa-sign-out-alt me-2"></i> Logout
   </a>

   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
   </form>
</div>

<!-- Sidebar Close Button for Mobile -->
<div class="sidebar-close-btn d-md-none">
   <button id="closeSidebar" class="btn btn-light">X</button>  
</div>

<!-- Sidebar Toggle Button for Mobile -->
<button id="sidebarToggle" class="btn btn-dark d-md-none">☰</button>

<head><link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"></head>

<style>
    .sidebar {
        height: 100vh;
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        background: #343a40;
        padding-top: 20px;
        transition: transform 0.3s ease-in-out;
        z-index: 9999;
    }

    .sidebar a {
        padding: 10px 15px;
        text-decoration: none;
        color: #fff;
        display: block;
    }

    .sidebar a:hover {
        background: #495057;
    }

    /* Active Link Styling */
    .sidebar .active {
        background: #495057;
        font-weight: bold;
    }

    /* Mobile view: Sidebar takes full width */
    @media (max-width: 768px) {
        .sidebar {
            transform: translateX(-100%);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
        }

        .sidebar.open {
            transform: translateX(0);
        }

        .sidebar-close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 10000;
        }

        #sidebarToggle {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 10000;
        }
    }

    /* Hide the close button on larger screens */
    @media (min-width: 768px) {
        #closeSidebar {
            display: none;
        }

        #sidebarToggle {
            display: none;
        }
    }
</style>

<script>
    document.getElementById('closeSidebar').addEventListener('click', function() {
        document.querySelector('.sidebar').classList.remove('open');
    });

    document.getElementById('sidebarToggle').addEventListener('click', function() {
        document.querySelector('.sidebar').classList.toggle('open');
    });
</script>
