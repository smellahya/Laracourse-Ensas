@extends('layouts.app')
@section('content')

<div class="w-full block mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <h3 class="text-gray-700 sm:w+1/5 text-center uppercase font-bold mb-2">Attendences</h3>
        @foreach ($teacher->classes as $class)
        <div class="container flex flex-wrap items-center">
            
                <div class= "row w-full sm:w+1/2 text-right border border-gray-200 rounded pl-10">
                    <div class="col-sm text-gray-800 uppercase font-semibold px-4 py-4 mb-2">{{ $class->class_name }}</div>
                    <a href="{{ route('teacher.attendance.create',$class->id) }}" class="bg-gray-200 inline-block mb-4 text-xs text-gray-600 uppercase  text-center font-semibold px-4 py-2 border border-gray-200 rounded">Attendence</a>
                </div>
            @endforeach
        </div>
@endsection