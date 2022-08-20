<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Annones</title>
          <!-- Bootstrap CSS & JS -->
          <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
                    <!-- END Bootstrap -->

                    <!-- additional  CSS  -->
        <link rel="stylesheet" href="css/style.css">
                    <!-- END additional CSS -->
        <!-- Font
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.sm\:border-t-0{border-top-width:0}.sm\:border-l{border-left-width:1px}.sm\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                font-size:1.3em;
                
            }
            .navbar{
                
            }
            .border-b{
                background-color:#1B0101;
                
            }
            .navbar-brand{
                border:3px solid  ;
                padding-right: 10px !important;
                border-radius:0px 30px 30px 0px;
                background-color:;
            }
            ul>li:hover{
                border-bottom:2px solid white;
            }
            .hidden{
                padding-top:  14px !important;
                margin-top:7px!important;
            }
            .aut{
                
                
                border:1px solid silver; 
                padding: 10px;
                background-color:;
                
                
            }
            .aut:hover{
                text-decoration: underline !important;
                color:green;
                background-color:white;
            }
            .href{
                color:#F0F0F0;
                margin: 5px;
            }
            #span{
                color: !important;
                font-weight:bolder;
                font-size:30px;
                border:3px solid ;
                padding: 5px;
                border-radius:30px;
            }
            .liste>a{
                color:white !important;
            }
           .liste:hover{
                color:gold !important;
                border-bottom: 2px solid green !important;
            }
        </style>
    </head>
    <body class="antialiased">
  
     <nav class="navbar navbar-expand-lg navbar-success bg-light text-success border-bottom shadow-sm">
            <div class="container-fluid">
            <a class="navbar-brand text-white bg-success border-success" href="{{ url('/') }}" style="padding: 1px;color:white"><span id="span">DY</span>Annonces</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item liste">
                        <h5><a class="nav-link text-success" href="{{ route('ad.index')}}">Offres</a></h5>
                    </li>
                    @auth
                    <li class="nav-item liste">
                        <h5><a class="nav-link text-success" href="{{ route('ad.create')}}">Publier une annonce</a></h5>
                    </li>
                    @else
                    <li class="nav-item liste">
                        <h5><a class="nav-link text-success" href="{{ route('register')}}">Publier une annonce</a></h5>
                    </li>
                    @endauth
                </ul>
                    @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block ">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="aut">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="aut">Se connecter</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="aut ">S'inscrire</a>
                                        @endif
                                    @endauth
                                </div>
                    @endif
            </div>
            </div>
    </nav>  

        @yield('content')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.25.0/axios.min.js"></script>   
        <script src="{{ url('publicjs/bootstrap.bundle.min.js')}}" ></script>
            
        @yield('extra-js')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    </body>
</html>
