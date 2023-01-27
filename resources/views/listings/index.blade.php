@extends('layout')

@section('content')
{{-- @include('hello')
    @php
        $testing="THIS IS KYS SHIT HAPPEND";
    @endphp

    <h1>{{ $testing }}</h1> --}}
    <article class="bg-bland">
        {{-- pass listing to listing-list component as attributes --}}
        @unless ( $listing == null  || count( $listing ) <= 1 ){{-- inverse if(if true then go to else, otherwise,   execute below html) --}}
            @foreach($listing as $listing)
                <x-listing-list :list="['listing'=>$listing, 'selfLink'=>$selfLink]" />
            @endforeach
        @else
            <x-card class="py-5 text-center text-5xl font-semibold">
                <p>There's No data Avaliable</p>
            </x-card>
        @endunless
    </article>

@endsection