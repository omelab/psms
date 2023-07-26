<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.headers.head')
    </head>
    <body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
        <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>

        <!-- sidenav  -->
        @include('partials.sidebars.sidenav')
        <!-- end sidenav -->

        <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
          <!-- Navbar -->
          @include('partials.headers.navbar')
          <!-- end Navbar -->
    
          <!-- cards -->
          <div class="w-full px-6 py-6 mx-auto">
            <div class="w-full min-h-70vh">
                @yield('content')
            </div>

            @include('partials.footers.footer')

          </div>
          <!-- end cards -->
        </main>

        @include('partials.sidebars.settings') 

    </body>

    @include('partials.scripts.script')
    
</html>
