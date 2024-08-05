<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showFormRegister()
    {
        $categoryAll = Category::whereNull('parent_id')->with('children')->get();

        return view('auth.register', compact('categoryAll'));
    }
    public function register(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $data['password'] = bcrypt($data['password']);
        $user = User::query()->create($data);
        return view('auth.login');
        // Auth::login($user);
        // $request->session()->regenerate();
        // return redirect()->intended('/home');
    }
}
