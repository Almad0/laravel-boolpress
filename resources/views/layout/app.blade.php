<!DOCTYPE html>
<html lang="en" dir="ltr">
  @include('layout.head')
  <body>

    @yield('main');


    <script> {{asset('js/app.js')}} </script>
  </body>
  
</html>
