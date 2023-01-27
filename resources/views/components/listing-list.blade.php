@php
    // dd($list->listing);
    $listing = $list['listing'];
    $selfLink = $list['selfLink'];
@endphp

<x-card class='flex tablet:flex-col h-auto p-5'>{{-- add class to card component --}}
    {{-- Dummy Image --}}
    <div class="post-logo flex flex-2 items-center tablet:justify-center tablet:my-2">
        <img class=" w-32 h-32 border-2 border-solid border-black rounded-full"
        src="{{ asset('images/1628411619675.jpeg') }}" alt="">
    </div>
    <aside class="flex-1 ml-5">

        {{-- title --}}
        <a href="/post/{{ $listing['id'] }}/">{{-- Link to posting --}}
            <h1 class=" text-3xl underline font-bold">{{ $listing['title'] }}</h1>
        </a>

        {{-- description --}}
        <article class=" ml-2 mb-1">
            <p class=" py-2">{{ $listing['desc'] }}</p>
        </article>

        {{-- Tags --}}
        <div class="flex android:grid android:grid-cols-2 my-2 py-2">
            <x-tags :tags="$listing->tags" class="text-center android:w-3/4 android:justify-self-center" />
            {{-- <button class="bg-lightPrimary hover:bg-primary text-white font-bold border rounded-xl mx-2 android:my-2 px-5 ">
                {{ $tag }}
            </button> --}}
        </div>
    
    </aside>
</x-card>