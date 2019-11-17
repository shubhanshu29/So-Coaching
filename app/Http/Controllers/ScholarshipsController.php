<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scholarship;

class ScholarshipsController extends Controller
{
    public function index()
    {
        $scholarships=Scholarship::orderBy('marks','desc')->get();
        return view('scholarship')->with('scholarships',$scholarships);
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
        $scholarship->name = $request->input('name');
        $scholarship->email = $request->input('email');
        $scholarship->marks = $request->input('marks');
        $scholarship->number = $request->input('number');
        $material->save();
        return redirect('/')->with('success', 'Request  added');
    }
}
