<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
     * login view
     */
    public function index() {

        return view('admin.login');
    }

    /*
     * login
     */
    public function login(LoginRequest $request) {

        if(auth()->guard('admin')->attempt($request->only('username','password'))) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login.index')->with(['error' => 'بيانات التسجيل غير صحيحة']);
    }

    public function logout() {
        auth()->guard('admin')->logout();
        return redirect()->route('admin.login.index');
    }
}
