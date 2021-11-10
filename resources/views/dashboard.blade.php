<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Relaciones') }}
        </h2>
    </x-slot>

    

    <!-- component --> 
   
    <div class="w-full bg-gray-800">
       
        <section class="max-w-6xl mx-auto px-4 sm:px-2 lg:px-4 py-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                @foreach ($users as $user)
                <a href="{{ route('profile',$user->id) }}" >
                    <div class="w-full bg-gray-900 rounded-lg sahdow-lg overflow-hidden flex flex-col md:flex-row">

                        <div class="w-full md:w-3/5 text-left p-6 md:p-4 space-y-2">
                            <p class="text-xl text-white font-bold"> {{ $user->name }}</p>

                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </section>
      
    </div>
   
</x-app-layout>