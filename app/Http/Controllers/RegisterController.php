<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'Registrasi',
            'active' => 'registrasi'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');
    }
}
