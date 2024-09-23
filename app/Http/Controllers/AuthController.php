<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function insert(Request $request)
    {
        if (User::where('username', $request->username)->exists()) {
            return response()->json(['message' => 'Username already taken'], 409);
        }

        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);


        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return response()->json(['message' => 'Data berhasil ditambahkan']);
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User does not exist');
        }

        if (Hash::check($request->password, $user->password)) {

            $token = $user->createToken('Personal Access Token')->plainTextToken;
            Auth::login($user);
            return redirect()->route('dashboard')->with('token', $token);

        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return redirect()->route('login');
    }

}
