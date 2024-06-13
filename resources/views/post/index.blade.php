<x-app-layout>
    <x-slot name="header">

        <div class="flex flex-col justify-center items-end">
            <div
                class=" w-1/6 hover:scale-110 bg-yellow-300 rounded-md font-bold p-2 flex justify-center items-center  ">
                <a href="{{ route('create') }}">Crear post</a></div>
        </div>

    </x-slot>

    <div class="py-12">

        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col ">
                        @if (count($posts) == 0)
                            <div class="  flex justify-center items-center  ">
                                <h1 class="font-bold text-red-600">
                                    No Hay posts que ver
                                </h1>
                            </div>
                        @endif
                        @foreach ($posts as $post)
                            <div
                                class=" grid lg:grid-cols-8 sm:grid-cols-2  p-2 m-2 border-2 rounded-md shadow-zinc-900 shadow-md">

                                <div class="w-1/2 rounded-md h-32 my-auto  bg-cover bg-center"
                                    style="background-image: url({{ Storage::url($post->poster) }})"> </div>
                                <div class="col-span-3">
                                    <h1 class="uppercase  ">
                                        {{ $post->title }}
                                    </h1>
                                    <p class="text-sm">{{ $post->content }}</p>
                                </div>
                                <div class="px-4 col-span-2">
                                    <h2 class="uppercase  ">
                                        {{ $post->date }}
                                    </h2>
                                    <p class="text-sm">{{ $post->seasons }} Temporadas</p>
                                    <p class="text-sm ">Generos: {{ $post->generos }} </p>
                                    <p class="text-sm ">Protagonistas: {{ $post->actors }} </p>
                                    <p class="text-sm ">Directores: {{ $post->director }} </p>
                                </div>
                                <div class="px-4 ">
                                    <p class="uppercase">{{ $post->plataforma }}</p>
                                    @if ($post->status === 1)
                                        <p class="text-green-500">Estado:Publicado</p>
                                    @else
                                        <p class="text-red-500">Estado:Inactivo</p>
                                    @endif
                                </div>
                                <div class="px-4 ">
                                    <h2 class="uppercase  ">Aciones</h2>
                                    <div
                                        class="bg-yellow-400 w-24 my-2 flex justify-center items-center text-white rounded-md   ">
                                        <a href="{{ Route('edit', $post) }}">Edit</a>
                                    </div>
                                    <div
                                        class="bg-red-600 w-24  flex justify-center items-center text-white rounded-md   ">
                                        <form action="{{ Route('post.destroy', $post) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{ $posts->links() }}
    </div>

</x-app-layout>
