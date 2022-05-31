@extends('layouts.app')

@section('content')
<div class="w-full px-0 md:px-6 py-12">
    <div class="flex items-center bg-gray-200">
        <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-semibold">Code</div>
        <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-semibold">Subject</div>
        <div class="w-1/3 text-right text-gray-600 py-2 px-4 font-semibold">Teacher</div>
    </div>
    @foreach ($student->class->subjects as $subject)
        <div class="flex items-center justify-between border border-gray-200 -mb-px">
            <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ $subject->subject_code }}</div>
            <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium"><a href="{{route('mycourses.show',$subject->id)}}">{{ $subject->name }}</a></div>
            <div class="w-1/3 text-right text-gray-600 py-2 px-4 font-medium">{{ $subject->teacher->user->name }}</div>
        </div>
    @endforeach
</div>

@endsection