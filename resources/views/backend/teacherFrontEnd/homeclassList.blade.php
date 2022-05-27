
@extends('layouts.app')
@section('content')
    

<div class="w-full block mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
<div class="w-full items-right sm:w-1/2 ml-2 mb-6">
    
    <h3 class="text-gray-700 sm:w+1/2 text-center uppercase font-bold mb-2">Subject List</h3>
    <div class="flex items-center bg-gray-200 text-center rounded-tl rounded-tr">
        <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-semibold">Code</div>
        <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-semibold">Subject</div>
        <div class="w-1/3 text-right text-gray-600 py-2 px-4 font-semibold">Teacher</div>
    </div>
    @foreach ($teacher->subjects as $subject)
        <div class="flex items-center justify-between border border-gray-200">
            <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ $subject->subject_code }}</div>
            <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ $subject->name }}</div>
            <div class="w-1/3 text-right text-gray-600 py-2 px-4 font-medium">{{ $subject->teacher->user->name }}</div>
        </div>
    @endforeach
</div>
</div>
</div>
@endsection

