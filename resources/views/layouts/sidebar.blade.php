<div class="sidebar bg-dark d-flex flex-column">
    <h4 class="text-white text-center py-3">My Dashboard</h4>
    <a href="{{ route('dashboard') }}" class="text-white py-2 px-3 d-flex align-items-center">
        <i class="fas fa-tachometer-alt me-2"></i> Dashboard
    </a>
    <a href="{{ route('questions.index') }}" class="text-white py-2 px-3 d-flex align-items-center">
        <i class="fas fa-list me-2"></i> Manage Questions
    </a>
    <a href="{{ route('profile.edit') }}" class="text-white py-2 px-3 d-flex align-items-center">
        <i class="fas fa-user me-2"></i> Profile
    </a>
    <a href="{{ route('logout') }}" class="text-white py-2 px-3 d-flex align-items-center" 
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt me-2"></i> Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>

<div class="sidebar-close-btn d-md-none">
    <button id="closeSidebar" class="btn btn-light">X</button>
</div>

<style>
    .sidebar {
        height: 100vh;
        width: 250px;
        position: fixed;
        background: #343a40;
        padding-top: 20px;
        transition: transform 0.3s ease-in-out;
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

    /* Mobile view: Sidebar takes full width */
    @media (max-width: 768px) {
        .sidebar {
            transform: translateX(-100%);
            position: fixed;
            top: 0;
            left: 0;
        }

        .sidebar.open {
            transform: translateX(0);
        }

        .sidebar-close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
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
