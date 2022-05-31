@extends('layouts.app');
@section('content')

<div class="roles-permissions">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-gray-700 uppercase font-bold">{{$subjects->name}}</h2>
        </div>
        
    </div>
    <div class="mt-8 bg-white rounded border-b-4 border-gray-300">
        <div class="flex flex-wrap items-center uppercase text-sm font-semibold bg-gray-300 text-gray-600 rounded-tl rounded-tr">
            <div class="w-3/12 px-4 py-3">Chapter</div>
            <div class="w-2/12 px-4 py-3">File</div>
            <div class="w-3/12 px-4 py-3">Description</div>
        </div>
        @foreach ($units as $unit)
            <div class="flex flex-wrap items-center text-gray-700 border-t-2 border-l-4 border-r-4 border-gray-300">
                <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $unit->chapter }}</div>
                <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight"><a class="btn btn-outline-success" role="button" href="{{ $unit->chapter_file_link }}">Previw</a></div>
                <div class="w-3/12 px-4 py-3 text-sm text-gray-600 tracking-tight">{{ $unit->description }}</div>
                
            </div>
        @endforeach
    </div>
    {{-- <div class="mt-8">
        {{ $units->links() }}
    </div> --}}
</div>

@endsection