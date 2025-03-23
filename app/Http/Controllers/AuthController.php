<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{
    public function register(Request $request){
        if ($request->isMethod('get')) {
            return view('signin.index');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Proceed with storing user data
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Mail::to($request->email)
                ->send(new RegisterMail($user));

        return redirect()->route('registered', ['id' => $user->id])
            ->with('status', 'Registration successful! Please login.');
    }

    public function login(Request $request){
        if($request->isMethod('get')){
            return view('login.index');
        }

        $user = User::where('email', $request->email)->first();

        if(!$user){
            return back()->withErrors(['email' => 'User not found.'])->withInput();
        }

        if(!$user->email_verified_at){
            return back()->withErrors(['email' => 'Your email is not verified!'])->withInput();
        }

        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8'
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard')->with('success', 'Login successful');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function registered($id){
        $user = User::findOrFail($id);
        return view('signin.registered', compact('user'));
    }

    public function verify($id){
        $user = User::findOrFail($id);

        if ($user->email_verified_at) {
            return redirect()->route('login')->with('status', 'Email is already verified.');
        }

        $user->update(['email_verified_at' => now()]);

        return redirect()->route('verified')->with('success', 'Email verified successfully! You can now log in.');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
}
