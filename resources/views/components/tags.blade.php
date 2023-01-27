@props(['tags'])
@foreach (explode(',',$tags) as $tag){{-- Show each tags from database --}}
<div {{ $attributes -> merge( ['class' => 'flex items-center h-full bg-lightPrimary hover:bg-primary text-white font-bold border rounded-xl mx-2 android:my-2 px-5 ']) }}>
    <a {{ $attributes -> merge( ['href' => '/index?tags=' . strtolower($tag) ] ) }}>
        {{ $tag }}
    </a>
</div>
    

@endforeach