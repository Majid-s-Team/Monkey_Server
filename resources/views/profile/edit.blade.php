@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Profile</h2>
    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="password">New Password (optional)</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Leave blank to keep current password">
        </div>
        <div class="form-group mb-3">
            <label for="password_confirmation">Confirm New Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm password">
        </div>
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection
<head><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    body {
    font-family: 'Poppins', sans-serif;
   
}
</style>