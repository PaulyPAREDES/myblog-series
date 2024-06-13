@extends('layouts.layout')

@section('title', 'Home')
@section('menu')
    <div class="flex">
        @foreach ($categories as $category)
            <a href="{{ route('posts.category', $category) }}">
                <div class=" p-2 justify-end items-centerhover:scale-110 hover:bg-yellow-300">
                    <h1 class="text-white text-1xl font-semibold  hover:text-black  ">
                        {{ $category->name }}
                    </h1>
                </div>
            </a>
        @endforeach
    </div>
@endsection

@section('content')
    <div class="max-w-7xl  mx-auto p-8 lg:p-8 ">
        <div class="py-2">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class= "w-full p-2 my-4 h-20 bg-black flex flex-col justify-center items-center uppercase ">
                        <h1 class="text-white text-2xl font-semibold"> Las mejores series que no podes dejar de ver</h1>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 ">
                        @foreach ($posts as $post)
                            <div class=" w-full h-96 bg-cover bg-center hover:scale-105 flex flex-col justify-end "
                                style="background-image: url({{ Storage::url($post->poster) }})">
                                <div
                                    class="w-full h-20 bg-black opacity-75 flex flex-col justify-end items-center text-wrap ">
                                    <h1 class="text-white text-2xl font-semibold uppercase">
                                        {{ $post->title }}
                                    </h1>
                                    <button
                                        class="rounded text-black w-24 bg-white m-2 text-sm font-bold transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-yellow-300 ">
                                        <a href="{{ route('show', $post->id) }}">Ver Detalles</a></button>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        {{ $posts->links() }}
    </div>

@endsection
