<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use App\User;
use DB;

class AttendanceController extends Controller
{
    public function index()
    {
        $users=DB::select('select * from users where id=:id',['id'=>auth()->user()->id]);
        return view('attendance.index')->with('users',$users);
    }
}
