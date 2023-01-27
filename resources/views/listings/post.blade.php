@extends('layout')

@section('content')
    <x-card class="flex flex-col items-center justify-evenly h-screen tablet:h-auto">

        {{-- Go Back Button --}}
        <div class="m-0 mr-auto ml-5 sticky top-20">
            <a href="{{ $selfLink }}" class="bg-red hover:bg-lightRed p-2 rounded-full px-4"> <i class="fa fa-arrow-left"></i> </a>
        </div>

        {{-- Logo --}}
        <div class="post-logo flex flex-2 items-center tablet:justify-center tablet:my-2">
            <img class=" w-32 h-32 border-2 border-solid border-black rounded-full"
            src="{{ asset('images/1628411619675.jpeg') }}" alt="">
        </div>
        
        {{-- Title --}}
        <header>
            <h1 class="text-4xl text-center">{{ $listing->title }}</h1>
        </header>

        {{-- Tags --}}
        <div class="flex android:grid android:grid-cols-2 android:justify-center android:items-center my-2 py-2">
            <x-tags :tags="$listing->tags" />
        </div>

        {{-- Description --}}
        <article class="text-center ">
            
            <p class="mx-20">{{ $listing->desc }}</p>
        </article>

        {{-- Button Section --}}
        <div class="w-3/4">
           
            {{-- Email --}}
            <div class="flex-1 email bg-red text-white text-center rounded-xl m-2 p-2">
                <a href="mailto:{{ $listing->email }}">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                     Email To
                </a>
            </div>

            <div class="flex-1 p-5">

            </div>
        </div>
        

    </x-card>
        
@endsection