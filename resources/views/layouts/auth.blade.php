<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('partials.headers.head')
    </head> 
    <body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
      {{-- Header  --}}
      @include('partials.headers.auth_nav')
      <main class="mt-0 transition-all duration-200 ease-in-out"> 
        {{-- Main Content --}}
        <section class="min-h-screen">
          @yield('content')
        </section>
        {{-- Footer --}}
        @include('partials.footers.auth_footer')
      </main> 
    </body> 
    @include('partials.scripts.script')
</html>