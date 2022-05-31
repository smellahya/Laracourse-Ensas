<?php

namespace App\Http\Controllers;

use App\Unit;
use App\Subject;
<<<<<<< HEAD
use App\Http\Controllers\Auth;
=======
>>>>>>> 2befd5dd93d0cecf6492c875c89a443922ae4e25
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
<<<<<<< HEAD
    {        
        $units = Unit::all();

        $subjects = Subject::find($id);
        
        $units = Unit::where('subject_id', $id)->get();

        // $subject = Subject::with('units');

        return view('backend.subjectlist.units.index',['subjects' => $subjects],['units' => $units],['subject_id' => $id]);
=======
    {
        $subject = Subject::find($id);
        $units = Unit::Where('subject_id',$id)->get();
            return view('backend.subjectlist.units.index',compact('units','subject'));
>>>>>>> 2befd5dd93d0cecf6492c875c89a443922ae4e25
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::all();

        return view('backend.subjectlist.units.create',compact('units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'chapter'          => 'required|string|max:255',
            'chapter_file_link'  => 'required|string',
            'description'   => 'required|string|max:255',
            'subject_id'  => 'required|numeric'

            
        ]);

        Unit::create([
            'chapter'          => $request->chapter,
            'chapter_file_link'  => $request->chapter_file_link,
            'description'   => $request->description,
            'subject_id'   => $request->subject_id 
            
        ]);

        return redirect()->route('units.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
