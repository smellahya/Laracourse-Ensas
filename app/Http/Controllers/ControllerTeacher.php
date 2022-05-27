<?php
namespace App\Http\Controllers;

use App\Grade;
use App\Parents;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class ControllerTeacher extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function classAttendences(){

        $user = Auth::user();
        $teacher = Teacher::with(['user','subjects','classes','students'])->withCount('subjects','classes')->findOrFail($user->teacher->id);

            return view('backend.teacherFrontEnd.Attendences', compact('teacher'));
    }

    public function classList(){

        $user = Auth::user();
        $teacher = Teacher::with(['user','subjects'])->withCount('subjects','classes')->findOrFail($user->teacher->id);

            return view('backend.teacherFrontEnd.homeclassList', compact('teacher'));
    }


}
