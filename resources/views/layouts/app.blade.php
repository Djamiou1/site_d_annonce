<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Annonces</title>
        
                 <!-- Bootstrap CSS & JS -->
        <!--<link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{ asset('js/app.js')}}" ></script>
                     END Bootstrap 

                     additional  CSS 
        <link rel="stylesheet" href="css/style.css">
                   END additional CSS -->
        <!-- Fonts
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" >
        <link href="{{ url('js/bootstrap.bundle.min.js') }}" rel="stylesheet" >
        <script src="https://kit.fontawesome.com/055e26f696.js" crossorigin="anonymous"></script>
    
          Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
      <style>
        body{
          
        }
      </style>  
             
    </head>
    <body class="font-sans antialiased">
        <div class="">
            @include('layouts.navigation')

            
            <!-- Page Content -->
            <main>
              @yield('content')
            </main>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.25.0/axios.min.js"></script>

           @yield('extra-js')

        <script src="public/css/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    </body>
</html>
