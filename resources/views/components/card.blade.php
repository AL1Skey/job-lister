<section {{ $attributes -> merge( [ 'class' => 'mb-3 pt-3 bg-secondary m-2 text-white rounded' ] ) }}>{{-- merge class in here with class from this component that will added in class --}}
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    
    {{-- <div class="post-logo flex flex-2 items-center ">
        <img class=" w-32 h-32 border-2 border-solid border-black rounded-full"
        src="{{ asset('1628411619675.jpeg') }}" alt="">
    </div> --}}
    
    {{-- <aside class="flex-1 ml-5">
        {{ $slot }}
    </aside> --}}

    {{ $slot }}
</section>