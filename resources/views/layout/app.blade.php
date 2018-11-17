<!DOCTYPE html>
<html lang="en" dir="ltr">

  @include('layout.head')

  <body>

      <!-- LOADER -->
      {{--@include('layout.loader')--}}

      @include('layout.navbar')

      @yield('contenido')

      @include('layout.footer')

  </body>
</html>
