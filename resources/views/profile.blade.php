<x-guest-layout>
<!-- component -->
    <div class="min-h-screen bg-gray-500 py-6 flex flex-col justify-center sm:py-12">
        <div class="flex space-x-4 px-4 justify-around">
            <!-- CARD -->
            <div
                class="bg-gradient-to-t from-black via-blue-900 to-blue-700  h-96 w-auto md:w-auto md:rounded-3xl rounded-full shadow-md relative flex flex-col items-center justify-between md:items-start py-5 md:p-5 transition-all duration-150">
                <!-- IMG PROFILE -->
                <img class="rounded-full w-32 h-32 shadow-sm absolute -top-16 transform md:scale-110 duration-700"
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
                <ul class="text-lg text-gray-300 font-light hidden md:block">
                    <li><strong>País</strong>: {{ $user->location->country }}</li>
                    <li><strong>Nivel</strong>: @if ($user->level)
                        <a href="#" class="text-red-600">{{ $user->level->name }}</a>
                        @else
                        ---
                        @endif
                    </li>
                    <li><strong>Web</strong>: {{ $user->profile->web }}</li>
                </ul>
                <hr>
                <p class="text-red-50"><strong>Grupos</strong>
                @forelse  ($user->groups as $group)
                <span class="rounded-full bg-red-500 text-red-50 py-1 px-2 text-xs font-bold ml-1">
                    {{ $group->name }}
                </span>
                @empty
                    <em>No pertenece a ningún grupo</em>
                @endforelse
                   
                   

                </p>


            </div>
        </div>
    </div>
</x-guest-layout>
