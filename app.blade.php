
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="font-size: 2rem; font-weight:500;">
                   laravel
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="font-size: 26px; font-weight:600;">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="font-size: 26px; font-weight:600;">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="font-size: 20px; font-weight:700;" >
                                {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="font-size: 16px; font-weight:700;">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Acme&family=Charm:wght@400;700&family=Cinzel+Decorative:wght@400;700;900&family=Dosis:wght@200..800&family=Homemade+Apple&family=Italianno&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Kaushan+Script&family=Merienda:wght@300..900&family=Oranienbaum&family=Rubik+Doodle+Shadow&family=Satisfy&family=Tangerine:wght@400;700&display=swap');
        
        *{
            margin: 0;
            padding: 0;
            font-family: "Dosis", sans-serif;
            box-sizing: border-box;   
        }
        body{
            background: rgb(234, 232, 232);
        }
        form img{
            margin-left: 40%;
            margin-bottom: 3%;
            width: 100px;
        }
          .custom-login{
            height: 520px;
            padding-top: 40px
          }
          .container h1{
            text-align: center;
            font-weight: 700;
            padding-bottom: 3%
          }     
        form{
            background: rgb(255, 255, 255) ;
          }
          /* Navbar Styles */

          form{
            box-shadow: 0 10px 10px black,
            0 10px 10px -40px black;
            /* margin: 0 9%; */
            /* width: 100%;             */
          }
          form label{
            font-size: 20px;
          }

           input[type="email"]{
            border: none;
            background-color: rgb(243, 240, 240)
          }

          input[type="password"]{
            border: none;
            background-color: rgb(237, 235, 235)
          }
          input[type="text"]{
            border: none;
            background-color: rgb(239, 237, 237)
          }
          
          button{
            background: green;
            color: white;
            font-weight: 800;
            width: 100%;
            border: none;
            padding: 8px;
            border-radius: 8px;
            font-size: 20px
          }       
        .carousel-caption{
          background: #444444be;
          color: white;
          width: 47%;
          height: 17vh;;
          margin-left: 5%;
        
        } 
a {
    color: #333;
    text-decoration: none;
}

/* Sidebar Styles */
.sidebar {
    background-color: #333;
    color: #fff;
    width: 250px;
    height: 100%;
    position: fixed;
    top: 10%;;
    left: 0;
    padding: 20px;
}

.sidebar h2 {
    margin-bottom: 20px;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    margin-bottom: 10px;
}

.sidebar ul li a {
    color: #fff;
    text-decoration: none;
}

.sidebar ul li a:hover {
    color: #ccc;
}

/* Content Styles */
.content {
    margin-left: 250px; /* Adjust according to the sidebar width */
    padding: 20px;
}

.content header {
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #ddd;
}

.content header h1 {
    font-size: 24px;
}

.content main {
    display: flex;
    flex-wrap: wrap;
}

.content .card {
    flex: 1 1 300px; /* Adjust card width */
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin-right: 20px;
    margin-bottom: 20px;
}

.content .card h2 {
    margin-bottom: 10px;
}

.content .card p {
    margin: 0;
}

/* Responsive styles */
@media (max-width: 768px) {
    .sidebar {
        width: 100%;
        height: auto;
        position: relative;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

    .content {
        margin-left: 0;
    }
}

    
</style>
</body>
</html>
