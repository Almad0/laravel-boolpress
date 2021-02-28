<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('layout.head')

    <body>
      @include('partials.header')
    
      @yield('main')
    </body>

</html>
