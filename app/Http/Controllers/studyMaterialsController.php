<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudyMaterial;

class studyMaterialsController extends Controller
{
    public function index()
    {
        $materials=StudyMaterial::orderBy('updated_at','desc')->get();
        return view('studyMaterial.index')->with('materials',$materials);
    }

    public function create()
    {
        return view('studyMaterial.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'url' => 'nullable',
            'title' => 'required',
            'body' => 'required',
            'attachment' => 'nullable|max:1999'
        ]);
        // Handle File Upload
        if($request->hasFile('attachment')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        // Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();
        return redirect('/posts')->with('success', 'Post Created');
    }
}
