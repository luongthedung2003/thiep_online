<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.index');
        }
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Vui lòng nhập Email admin.',
            'email.email' => 'Email không đúng định dạng.',
            'password.required' => 'Vui lòng nhập Mật khẩu.'
        ]);

        // Check if password matches 12345678 OR valid user with Hash
        if ($request->password === '12345678') {
            session([
                'admin_logged_in' => true,
                'admin_email' => $request->email
            ]);
            return redirect()->route('admin.index')->with('success', 'Đăng nhập Admin thành công!');
        }

        // Try standard Auth attempt
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            session([
                'admin_logged_in' => true,
                'admin_email' => $request->email
            ]);
            return redirect()->route('admin.index')->with('success', 'Đăng nhập Admin thành công!');
        }

        return back()->withErrors([
            'password' => 'Mật khẩu không đúng! (Mật khẩu mặc định: 12345678)'
        ])->withInput();
    }

    public function showRegister()
    {
        return view('admin.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin',
        ]);

        session([
            'admin_logged_in' => true,
            'admin_email' => $request->email
        ]);

        return redirect()->route('admin.index')->with('success', 'Đăng ký tài khoản Admin thành công!');
    }

    public function logout(Request $request)
    {
        session()->forget(['admin_logged_in', 'admin_email']);
        return redirect()->route('admin.login')->with('info', 'Bạn đã đăng xuất tài khoản Admin.');
    }
}
