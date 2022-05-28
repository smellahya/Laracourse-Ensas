<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Teacher;

class Class_Subject_ListController extends Controller
{
    //
    public function index()
    {
        $user=Auth::user();
        
        $teacher = Teacher::with(['user','subjects'])->withCount('subjects','classes')->findOrFail($user->teacher->id);

        return view('backend.classlist.show', compact('teacher'));
        
        
    }

    public function index2()
    {
        $user=Auth::user();
        
        $teacher = Teacher::with(['user','subjects'])->withCount('subjects','classes')->findOrFail($user->teacher->id);

        return view('backend.subjectlist.show', compact('teacher'));
        
        
    }


}
