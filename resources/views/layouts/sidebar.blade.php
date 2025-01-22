<div class="sidebar">
    <h4 class="text-white text-center">My Dashboard</h4>
    <a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="{{ route('questions.index') }}"><i class="fas fa-list"></i> Manage Questions</a>
    <a href="{{ route('profile.edit') }}"><i class="fas fa-user"></i> Profile</a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
