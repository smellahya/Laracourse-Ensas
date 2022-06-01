@extends('layouts.app')

@section('content')
    <div class="profile">
        <div class="sm:flex sm:items-center sm:justify-between mb-6">
            <div>
                <h2 class="text-gray-700 uppercase font-bold">Profile</h2>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('profile.edit') }}" class="bg-gray-0 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded">
                    <button class="btn btn-success"><span class="ml-2 text-xs font-semibold">Edit Profile</span></button>
                </a>
                <a href="{{ route('profile.change.password') }}" class="bg-gray-0 text-gray-700 text-sm uppercase ml-2 py-2 px-4 flex items-center rounded">
                    <button class="btn btn-info"><span class="ml-2 text-xs font-semibold">Change Password</span></button>
                </a>
            </div>
        </div>
        <div class="mt-8 bg-white rounded">
            <div class="w-full max-w-2xl mx-auto px-6 py-12 flex justify-between">
                <div>
                    <div class="md:flex md:items-center mb-4">
                        <div class=" d-inline p-2 m:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Name : 
                            </label>
                        </div>
                        <div class="d-inline p-2 md:w-2/3">
                            <span class="block text-gray-600 font-bold">{{ auth()->user()->name }}</span>
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-4">
                        <div class="md:w-1/3">
                            <label class=" text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Email :
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <span class="text-gray-600 font-bold">{{ auth()->user()->email }}</span>
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-4">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Role :
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <span class="text-gray-600 font-bold">{{ auth()->user()->roles[0]->name ?? '' }}</span>
                        </div>
                    </div>
                </div>        
                <div>
                    <div>
                        <img class="w-20 h-20 sm:w-32 sm:h-32 rounded-circle" src="{{ asset('images/profile/' . auth()->user()->profile_picture) }}" alt="avatar">    
                    </div>        
                </div>        
            </div>        
        </div>
    </div>
@endsection