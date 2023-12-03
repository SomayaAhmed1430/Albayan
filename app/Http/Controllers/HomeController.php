<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function checkUserType(){
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        if (Auth::user()->user_type === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        if (Auth::user()->user_type === 'teacher') {
            return redirect()->route('teacher.dashboard');
        }
        if (Auth::user()->user_type === 'student') {
            return redirect()->route('student.dashboard');
        }
    }
}
