<nav class="flex bg-secondary text-white text-lg w-full h-14 sticky top-0">
    <a href="/" class="flex-1 brand p-2 ">
        {{-- logo here --}}
        <img class="w-10 h-10 border rounded-full" src="{{ asset('images/illust_82627223_20220803_021935.png') }}" alt="">
    </a>
    <ul class="flex-1 flex mx-1 mr-auto list-none justify-evenly ">
        @for ( $i = 1; $i < 5; $i++ )
            <li class="w-full h-full flex justify-center items-center border-lightPrimary hover:border-b-4">
                <a href="#" class="">Dummy</a>
            </li>
        @endfor
    </ul>
</nav>