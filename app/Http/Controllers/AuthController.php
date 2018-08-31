<?php
namespace App\Http\Controllers;

use App\Admin;
use validater;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller{
public function showLoginForm()
{
    if (Auth::guard('admin')->check())
    {
        reidrect('admin');
    }
    return view('auth.login');
}
public function logout()
{
    Auth::guard('admin')->logout();
    return redirect()->route('admin');
}
}