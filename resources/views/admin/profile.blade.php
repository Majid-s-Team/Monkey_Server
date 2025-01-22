<!-- @extends('layouts.admin') -->

@section('content')
<h1>Edit Profile</h1>
<form action="{{ route('admin.updateProfile') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $admin->name }}" required>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ $admin->email }}" required>
    <button type="submit">Update</button>
</form>
@endsection
