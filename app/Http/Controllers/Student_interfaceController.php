<?php

namespace App\Http\Controllers;
use App\Unit;
use App\Subject;
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
    public function index3($id)
    {        
        $units = Unit::all();

        $subjects = Subject::find($id);
        
        $units = Unit::where('subject_id', $id)->get();

        // $subject = Subject::with('units');

        return view('backend.studentinterface.show',['subjects' => $subjects],['units' => $units],['subject_id' => $id]);
    }
}
