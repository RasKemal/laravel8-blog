@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-5xl">
            {{ $post->title }}
        </h1>
    </div>
</div>


<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500 content-center">
        By <span class="font-bold italictext-gray-800 text-center">{{ $post->user->name }}</span>
        , Created on Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-70 pt-8 pb-10 leading-8 font-light text-center">
        {{ $post->description }}
    </p>

</div>
    
@endsection