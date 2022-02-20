@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-16 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

@if (Auth::check()) {{-- Check if User is registered --}}
    <div class="pt-16 w-4/5 m-auto">
        <a 
            href="/blog/create"
            class="bg-blue-500 uppercase text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
            Create post
        </a>
    </div>
@endif

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-16 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/07/06/13/55/calculator-385506_1280.jpg" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold pb-4 text-5xl">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>
            </span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>

            <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                {{ $post->slug }}
            </a>
        </div>
    </div>
@endforeach

@endsection