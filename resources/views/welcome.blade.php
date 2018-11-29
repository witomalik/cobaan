<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FTUI Parking Registration System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
    </head>
    <body class="text-center">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto">
                <div class="inner">
                  <nav class="nav nav-masthead justify-content-center">
                    @if (Route::has('login'))
                        
                            @auth
                                 
                            @else
                                <a class="nav-link" href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        
                    @endif
                  </nav>
                </div>
            </header>

            <main role="main" class="inner cover">
                <h1 class="cover-heading"><b>FTUI</b> Parking Registration System</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>



                @if (Route::has('login'))
                        
                            @auth
                                 <p class="lead">
                  <a class="btn btn-lg btn-secondary" href="{{ url('/home') }}">Dashboard</a>
                </p>
                            @else
                                <p class="lead">
                  <a class="btn btn-lg btn-secondary" href="{{ url('/information') }}">Information</a>
                </p>
                            @endauth
                        
                    @endif

                
            </main>
            
            <footer class="mastfoot mt-auto">
                <div class="inner">
                  <p>FTUI Parking Registration System</p>
                </div>
              </footer>
            </div>
            
    </body>
</html>
