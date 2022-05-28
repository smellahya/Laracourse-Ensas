<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;


class Student_interfaceController extends Controller
{
    //
    public function index()
    {
        $user=Auth::user();
        
        $student = Student::with(['user','parent','class','attendances'])->findOrFail($user->student->id); 

        return view('backend.studentinterface.attendance', compact('student'));
        
    }
    public function index2()
    {
        $user=Auth::user();
        
        $student = Student::with(['user','parent','class','attendances'])->findOrFail($user->student->id); 

        return view('backend.studentinterface.subjectlist', compact('student'));
        
        
    }
}
