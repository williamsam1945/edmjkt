<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index() {
        return view('pages.auth.register');
    }

    function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infoLogin)){
            return 'Success';
        } else {
            return 'Failed';
        }
    }

    public function store (Request $request) {
        $validateData = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email:dns'],
            'password' => ['required', 'min:5', 'max:255']
        ]);
        dd('Register Success');
    }
}
