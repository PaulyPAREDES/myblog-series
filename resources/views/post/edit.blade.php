<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit  post') }}
        </h2>

    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 dark:text-gray-100 flex justify-center items-center text-gray-500 text-sm">


                    <form method="POST" action="{{ route('post.update', $post) }}" enctype="multipart/form-data">

                        @csrf
                        @method('put')
                        <div class="border-2 rounded  shadow-zinc-900 shadow-md p-6 w-full">
                            <div
                                class="flex  justify-center items-center text-white bg-zinc-900 text-lg font-semibold p-2 ">
                                <h1>Modificar datos de la serie</h1>
                            </div>

                            <x-mydiv-form>
                                <x-mylabel for="title" :value="__('Titulo')" />
                                <x-myinput type="text" name="title" id="title" value="{{ $post->title }}"
                                    required />
                            </x-mydiv-form>

                            <div>
                                <input
                                    class="rounded h-7 focus:outline-none  focus:border-yellow-500 focus:ring-yellow-500"
                                    type="file" name="poster" id="poster" value={{ $post->poster }}>
                            </div>

                            <x-mydiv-form>
                                <x-mylabel for="status" :value="__('Seleciona Estado')" />
                                <x-myselect name="status" id="status">
                                    <option value={{ $post->status }}>{{ $post->status }} </option>
                                    <option value="0">inactivo</option>
                                    <option value="1">activo</option>
                                </x-myselect>
                            </x-mydiv-form>

                            <div>
                                <x-mylabel for="content" :value="__('Contenido')" />
                                <div class="grid  my-4">
                                    <textarea class="focus:outline-none rounded h-40 focus:border-yellow-500 focus:ring-yellow-500" name="content"
                                        id="content" for="content" rows="8">{{ $post->content }} </textarea>
                                </div>

                                <x-mydiv-form>
                                    <x-mylabel for="date" :value="__('Año')" />
                                    <x-myinput type="number" name="date" id="date" value="{{ $post->date }}"
                                        required />
                                </x-mydiv-form>

                                <x-mydiv-form>
                                    <x-mylabel for="seasons" :value="__('Temporadas')" />
                                    <x-myinput type="number" name="seasons" id="seasons" value="{{ $post->seasons }}"
                                        required />
                                </x-mydiv-form>

                                <x-mydiv-form>
                                    <x-mylabel for="generos" :value="__('Generos')" />
                                    <x-myinput type="text" name="generos" id="generos" value="{{ $post->generos }}"
                                        required />
                                </x-mydiv-form>

                                <x-mydiv-form>
                                    <x-mylabel for="actors" :value="__('Protagonista')" />
                                    <x-myinput type="text" name="actors" id="actors" value="{{ $post->actors }}"
                                        required />
                                </x-mydiv-form>

                                <x-mydiv-form>
                                    <x-mylabel for="director" :value="__('Directores')" />
                                    <x-myinput type="text" name="director" id="director"
                                        value="{{ $post->director }}" required />
                                </x-mydiv-form>

                                <x-mydiv-form>
                                    <x-mylabel for="plataforma" :value="__('Plataforma')" />
                                    <x-myselect name="plataforma" id="plataforma">
                                        <option value="{{ $post->plataforma }}">{{ $post->plataforma }} </option>
                                        <option value="Netflix">Netflix</option>
                                        <option value="max">max</option>
                                        <option value="Prime video">Prime video</option>
                                        <option value="Disney">Disney</option>
                                        <option value="Start +">Start +</option>
                                    </x-myselect>
                                </x-mydiv-form>

                                <x-mydiv-form>
                                    <x-mylabel for="category_id" :value="__('Seleccionar Categoria')" />
                                    <x-myselect name="category_id" id="category_id">
                                        <option value="{{ $post->category_id }}">{{ $post->category_id }} </option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </x-myselect>
                                </x-mydiv-form>

                            </div>

                            <div class="grid grid-cols-2 mx-auto w-64 ">
                                <a class="bg-black w-24 h-8 my-2 flex justify-center items-center text-white rounded-md "
                                    href="{{ route('post') }}">Regresar</a>
                                <button
                                    class="bg-yellow-400 w-32 h-8 my-2 flex justify-center items-center text-white rounded-md "
                                    type="submit">Actualizar Datos</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
