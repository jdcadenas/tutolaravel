<x-guest-layout>
    <!-- component -->
    <div class=" bg-gray-500  justify-center sm:py-12">
        <div class="space-x-4 px-4 justify-around">
            <!-- CARD -->
            <div class="bg-gradient-to-t from-black via-blue-900
                 to-blue-700  h-96 w-auto md:w-auto md:rounded-3xl 
                 rounded-full shadow-md  items-center justify-between 
                 md:items-start py-5 md:p-5 transition-all duration-150
                 divide-y-16 divide-solid divide-yellow-600">
                <!-- IMG PROFILE -->
                <img class="rounded-full w-28 h-28 shadow-sm absolute float-left transform md:scale-110 duration-700"
                    src="{{ $user->image->url }}" alt="" />

                <!-- TEXTS -->
                <div
                    class="transform -rotate-90 md:rotate-0 align-middle text-2xl font-semibold text-gray-200 text-center m-auto md:m-0 md:mt-16">
                    {{ $user->name }}
                    <div class="text-sm font-semibold text-gray-500  mx-auto">
                        {{ $user->email }}
                    </div>
                </div>

                <ul class="text-lg text-gray-300 font-light hidden md:block">
                    <li><strong>Instagram</strong>: {{ $user->profile->instagram }}</li>
                    <li><strong>Github</strong>: {{ $user->profile->github }}</li>
                    <li><strong>Web</strong>: {{ $user->profile->web }}</li>
                </ul>
                <hr>
                <ul class="text-lg text-gray-300 font-light hidden md:block mt-6 ">
                    <li><strong>País</strong>: {{ $user->location->country }}</li>
                    <li><strong>Nivel</strong>: @if ($user->level)
                        <a href="#" class="text-red-600">{{ $user->level->name }}</a>
                        @else
                        ---
                        @endif
                    </li>

                </ul>
                <hr>

                <p class="text-red-50 mt-4 ">
                    <strong>Grupos</strong>
                    @forelse ($user->groups as $group)
                    <span class="rounded-full bg-red-500 text-red-50 py-1 px-2 text-xs font-bold ml-1">
                        {{ $group->name }}
                    </span>
                    @empty
                    <em>No pertenece a ningún grupo</em>
                    @endforelse
                </p>
            </div>


            <div class="text-red-800 text-3xl bg-blue-500">
                POST
            </div>
            <div class="flex flex-wrap -mb-4">
                @foreach ($user->posts as $post )
                <div class="w-1/2 mb-4">
                    <div class="w-24 h-24 inline-block">
                        <img src="{{ $post->image->url }}" alt="">
                    </div>
                    <div
                        class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">

                            <div class="text-gray-900 font-bold text-xl mb-2">{{ $post->name }}</div>
                            <p class="text-gray-700 text-base">
                                {{$post->category->name }} |
                                {{ $post->comment_count }}
                                {{ Str::plural('comentario', $post->comment_count) }}</p>
                        </div>
                        <div class="flex items-center">

                            <div class="text-sm">
                                <p class="text-gray-900 leading-none"></p>
                                <p class="text-gray-600"> @foreach ($post->tags as $tag )
                                    <span>#{{ $tag->name }}</span>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-red-800 text-3xl bg-red-300">
                VIDEO
            </div>
            <div class="flex flex-wrap -mb-4">
                @foreach ($user->videos as $video )
                <div class="w-1/2 mb-4">
                    <div class="w-24 h-24 inline-block">
                        <img src="{{ $video->image->url }}" alt="">
                    </div>
                    <div
                        class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">

                            <div class="text-gray-900 font-bold text-xl mb-2">{{ $video->name }}</div>
                            <p class="text-gray-700 text-base">
                                {{$video->category->name }} |
                                {{ $video->comment_count }}
                                {{ Str::plural('comentario', $video->comment_count) }}</p>
                        </div>
                        <div class="flex items-center">

                            <div class="text-sm">
                                <p class="text-gray-900 leading-none"></p>
                                <p class="text-gray-600"> @foreach ($video->tags as $tag )
                                    <span>#{{ $tag->name }}</span>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


    </div>



</x-guest-layout>