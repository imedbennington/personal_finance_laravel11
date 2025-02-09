<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('Users Frontend Theme.registration');
    }

    public function showLoginForm()
    {
        return view('Users Frontend Theme.auth-basic-signin');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            // Login successful, redirect to user profile
            return redirect()->route('user-profile');
        }

        // Login failed, redirect back with an error
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }
    public function register_account(Request $request)
    {
        // Validate the input data
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'last_name'         => 'required|string|max:255',
            'phone'             => 'required|string|max:20',
            'email'             => 'required|email|unique:users,email',
            'password'          => 'required|min:8|confirmed',
            'dob'               => 'required|date',
            'country'           => 'required|string|max:255',
            'city'              => 'required|string|max:255',
            'zip'               => 'nullable|string|max:10',
            'address'           => 'nullable|string|max:500',
            'profile_picture'   => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the profile picture upload (if provided)
        $profilePicturePath = null;
        if ($request->hasFile('profile_picture')) {
            // Store the profile picture in 'public' disk under 'profile_pictures' directory
            $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        // Create and save the user record
        $user = new \App\Models\User();
        $user->name = $validated['name'];
        $user->last_name = $validated['last_name'];
        $user->phone = $validated['phone'];
        $user->email = $validated['email'];
        $user->password = bcrypt($validated['password']);
        $user->date_of_birth = $validated['dob'];
        $user->country = $validated['country'];
        $user->city = $validated['city'];
        $user->zip = $validated['zip'];
        $user->address = $validated['address'];
        $user->profile_picture = $profilePicturePath;  // Save profile picture path if available
        $user->save();


        Auth::login($user);
        // Redirect to user profile page with a success message
        return redirect()->route('user-profile')->with('success', 'Registration successful!');
    }


    public function get_info()
    {
        $usr = Auth::user();
        //dd($usr);
        return view('Users Frontend Theme.user-profile', compact('usr'));
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8|confirmed',
            'dob' => 'nullable|date',
            'country' => 'nullable|string',
            'city' => 'nullable|string',
            'zip' => 'nullable|string|max:10',
            'address' => 'nullable|string',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user->update($validated);

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->update(['profile_picture' => $path]);
        }

        return redirect()->route('user-profile', $user->id)->with('success', 'User updated successfully.');
    }
}
