<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>myBlog - Laravel 8</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
     <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    @livewireStyles
 </head>
 
  <body>
    
    @include('include.navbar')

    <div class="container justify-content-center mt-3">
      @include('include.flash')
    </div>
    
    @yield('content')


    
    <script src="https://kit.fontawesome.com/d4d43971f9.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    @livewireScripts

  </body>
</html>