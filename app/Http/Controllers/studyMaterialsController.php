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
}
