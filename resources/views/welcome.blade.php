<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      <!-- Styles -->
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif

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
</body>

</html>