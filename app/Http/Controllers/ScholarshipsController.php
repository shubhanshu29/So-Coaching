<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scholarship;

class ScholarshipsController extends Controller
{
    public function index()
    {
        $scholarships=Scholarship::orderBy('marks','desc')->get();
        return view('scholarships.index')->with('scholarships',$scholarships);
    }

    public function create()
    {
        return view('scholarships.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'marks' => 'required',
            'email' => 'required',
            'number' => 'required'
        ]);
        // Create Post
        $scholarship = new Scholarship;
        $scholarship->user_id=auth()->user()->id;
        $scholarship->name = $request->input('name');
        $scholarship->email = $request->input('email');
        $scholarship->marks = $request->input('marks');
        $scholarship->number = $request->input('number');
        $material->save();
        return redirect('/memberLogin')->with('success', 'Request  added');
    }
}
