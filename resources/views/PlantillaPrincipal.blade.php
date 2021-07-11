<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link href="{{ asset('css\app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .title {
            font-size: 84px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <ul class="menu">
        <li>
            <a href="{{ route('home')}}">
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('blog.index')}}">
                Blog
            </a>
        </li>
        <li>        
            <a href="{{ route('contact')}}">
                Contact
            </a>
        </li>
        <li>
            <a href="{{ route('about')}}">
                About
            </a>
        </li>
    </ul>
   
    <div id="app" class="content">       
        @yield('content')
    </div>
    <script src="{{ asset('js\app.js') }}"></script>
</body>

</html>