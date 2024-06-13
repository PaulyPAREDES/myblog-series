@extends('layouts.layout')

@section('title', 'Detalle')


@section('content')
    <div class="bg-cover bg-center h-screen  mx-auto p-8 lg:p-8 "
        style="background-image: url({{ Storage::url($id->poster) }})">
        <div class="py-2 bg-zinc-900  shadow-sm sm:rounded-lg ">
            <div class="p-4 ">
                <div class="flex  justify-between items-center space-x-20 ">
                    <div class="w-1/2 h-full  ">
                        <img class="rounded-lg" src="{{ Storage::url($id->poster) }}">
                    </div>
                    <div>
                        <div class="h-10 uppercase text-yellow-300">
                            {{ $id->plataforma }}
                        </div>
                        <h1 class="text-white text-2xl font-semibold py-2 uppercase">
                            {{ $id->title }}
                        </h1>
                        <div class="flex space-x-4 py-2 text-gray-400 text-sm">
                            <p class="">{{ $id->date }}</p>
                            <h4 class="">{{ $id->seasons }} Temporadas</h4>
                            <h4 class="">{{ $id->generos }}</h4>
                        </div>
                        <p class="text-white py-4 font-light">{{ $id->content }}</p>
                        <p class="text-white"><span class="text-gray-400">Protagonistas: </span>{{ $id->actors }}</p>
                        <p class="text-white"><span class="text-gray-400">Director: </span>{{ $id->director }}</p>
                    </div>
                </div>
            </div>

            <a class="bg-yellow-400 mx-auto w-24 h-8 my-4 flex justify-center items-center text-white rounded-md "
                href="{{ route('home') }}">Regresar</a>

        </div>
    </div>
@endsection
