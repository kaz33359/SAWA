<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
Use App\Models\User\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('user/pages/index');
    }
    public function login() {
        return view('user/auth/login');
    }
    public function register() {
        return view('user/auth/register');
    }
}