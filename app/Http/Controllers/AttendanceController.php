<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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

    public function create($id)
    {
        $users=DB::select('select * from users where (batch1=:id1 or batch2=:id2) and userType=1',['id1'=>$id,'id2'=>$id]);
        return view('attendance.create')->with(['users'=>$users,'id'=>$id]);
    }
    
    public function store(Request $request,$id)
    {
        $attendance= new Attendance;
        $users=DB::select('select * from users where (batch1=:id1 or batch2=:id2) and userType=1',['id1'=>$id,'id2'=>$id]);
        foreach($users as $user){
            $column=$user->id;
            $attendance->$column= $request->input($user->id);
        }
        $attendance->save();
        return redirect('/attendance')->with('success', 'Request  added');
    }

}
