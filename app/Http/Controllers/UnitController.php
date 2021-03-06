<?php

namespace App\Http\Controllers;

use App\Unit;
use App\Subject;
use App\Http\Controllers\Auth;
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
    {        
        $units = Unit::all();

        $subjects = Subject::find($id);
        
        $units = Unit::where('subject_id', $id)->get();

        // $subject = Subject::with('units');

        return view('backend.subjectlist.units.index',['subjects' => $subjects],['units' => $units],['subject_id' => $id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $units = Unit::all();

        // $subject = Subject::where('subject_id', $id)->get();
        $subjects = Subject::find($id);



        return view('backend.subjectlist.units.create',compact('units','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        //
        $subjects = Subject::find($id);

        $request->validate([
            'chapter'          => 'required|string|max:255',
            'chapter_file_link'  => 'required|string',
            'description'   => 'required|string|max:255',
            // // 'subject_id'  => 'required|numeric'

            
        ]);

        Unit::create([
            'chapter'          => $request->chapter,
            'chapter_file_link'  => $request->chapter_file_link,
            'description'   => $request->description,
            'subject_id'   => $subjects->id
            
        ]);

        return redirect()->route('units.index',$subjects->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit,$id)
    {
        //
        // $unit = Unit::latest()->get();

        // $subject = Subject::where('subject_id', $id)->get();
        // $subjects = Subject::latest()->get();
        $unit = Unit::find($id);
        
        $subjects = Subject::find($id);

        return view('backend.subjectlist.units.edit',compact('unit','subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit,$id)
    {
        //
        $subjects = Subject::find($id);
        $unit = Unit::find($id);

        
        $request->validate([
            'chapter'          => 'required|string|max:255'.$unit->id,
            'chapter_file_link'  => 'required|string',
            'description'   => 'required|string|max:255',
            // // 'subject_id'  => 'required|numeric'

            
        ]);

        $unit->update([
            'chapter'          => $request->chapter,
            'chapter_file_link'  => $request->chapter_file_link,
            'description'   => $request->description,
            // 'subject_id'   =>$subjects->id
            
        ]);

        return back();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit,$id)
    {
        //
        unit::where('id', $id)->delete();

        // $unit->delete();

        return back();
    }
}
