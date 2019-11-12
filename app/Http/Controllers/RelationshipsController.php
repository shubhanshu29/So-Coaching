<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relationship;

class RelationshipsController extends Controller
{
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'parent_id' => 'required',
            'student_id' => 'required',
        ]);
        // Create Relationship
        $relationship = new Relationship;
        $relationship->parent_id = $request->input('parent_id');
        $relationship->student_id = $request->input('student_id');
        $relationship->save();
        return view('admin.addRelation')->withSuccess(['Created Successfully!!']);            
    }

}
