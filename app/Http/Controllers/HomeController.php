<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function teacherHome()
    {
        return view('teacher.home');
    }
    public function adminHome()
    {
        return view('admin.home');
    }
    public function studentHome()
    {
        return view('student.home');
    }
    public function parentHome()
    {
        return view('parent.home');
    }
}
