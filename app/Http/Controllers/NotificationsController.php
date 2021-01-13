<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;


class NotificationsController extends Controller
{
    //
    public function index()
    {
        $notifications=Notification::orderBy('created_at','desc')->get();
        return view('notifications.index')->with('notifications',$notifications);
    }

    public function create()
    {
        if(!auth()->user()){
            return view('error');
        }
        if(auth()->user()->userType==0 || auth()->user()->userType==2){
            return view('notifications.create');
        }
        else{
            return view('error');
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'teachername' => 'required',
            'body' => 'required',
        ]);
        // Create Post
        $notification = new Notification;
        $notification->TeacherName = $request->input('teachername');
        $notification->body = $request->input('body');
        $notification->user_id = auth()->user()->id;
        $notification->save();
        return redirect('/notifications');        
        
    }

    
}
