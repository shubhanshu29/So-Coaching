<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use App\User;
use DB;

class ChatsController extends Controller
{
    public function index()
    {
        $chats=DB::select('select * FROM chats where to_user= :user',['user'=>auth()->user()->id]);
        return view('chats.index')->with('chats',$chats);
    }
    

    public function view($id)
    {
        $chats = DB::select('select * from chats where to_user= :to_user and from_user= :from_user',['to_user'=>auth()->user()->id,'from_user'=>$id]);
        return view('chats.view')->with('chats', $chats);
    }
}
