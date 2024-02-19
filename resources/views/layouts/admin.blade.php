<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100">
        <div class="flex h-screen">
          <!-- Sidebar -->
          <div class="bg-gray-800 text-white  md:w-34 lg:w-70 flex-shrink-0">
            
            <div class="p-4">
              <h2 class="text-lg font-semibold text-center">Dashboard</h2>
              
              <ul class="mt-4">
                <li>
                  <a href="{{ route('admin.roles.index')}}" class="block py-2 px-4 hover:bg-gray-700">Roles</a>
                </li>
                <li>
                  <a href="{{ route('admin.permissions.index')}}" class="block py-2 px-4 hover:bg-gray-700">Permissions</a>
                </li>
                <li>
             
                  <details class="relative">
                    <summary class="block py-2 px-4 cursor-pointer hover:bg-gray-700">Admin</summary>
               
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf

                      <x-dropdown-link class="block py-2 px-4 hover:bg-gray-700 text-white " :href="route('logout')"
                              onclick="event.preventDefault();
                                          this.closest('form').submit();">
                          {{ __('Log Out') }}
                      </x-dropdown-link>
                  </form>
             
                  </details>
                </li>
              </ul>
            </div>
          </div>
          
          <!-- Main content -->
          <div class="flex-grow ">
            {{ $slot }}
          </div>
        </div>
      </body>
</html>
