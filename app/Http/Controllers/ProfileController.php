<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user(); 
        return view('profile.view', compact('user'));
    }

    // Edit the profile
    public function edit()
    {
        $user = Auth::user(); 
        return view('profile.edit', compact('user'));
    }


public function update(Request $request)
{
    $user = Auth::user(); 

    // $request->validate([
    //     'name' => 'nullable|string|max:255',
    //     'email' => 'nullable|email|max:255|unique:users,email,' . $user->id,
    //     'password' => 'nullable|string|min:8|confirmed', 
    // ]);

    if ($request->has('name')) {
        $user->name = $request->name;
    }

    if ($request->has('email')) {
        $user->email = $request->email;
    }

    if ($request->has('password') && $request->password) {
        $user->password = Hash::make($request->password);
    }
    // dd($request->all());

    $user->save();

    return redirect()->route('profile.view')->with('success', 'Profile updated successfully!');
}

}
