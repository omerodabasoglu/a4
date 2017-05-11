<!DOCTYPE html>
<html lang="en-us">
<head>

    <title>@yield('title', 'Assignment 4')</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/united/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/college14.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
</head>
<body>
  <div id='content'>
      @if(Session::get('message') != null)
          <div class='message'>{{ Session::get('message') }}</div>
      @endif
    <header>
        @yield('header', 'COLLEGE SPORTS')
    </header>
    <div id="navbar">

            <ul class="nav nav-tabs">
                @if(Auth::check())
                    <li class="{{ Request::is('/') ? "active" : '' }}"><a class="{{ Request::is('/') ? "current" : '' }}" href="/" data-toggle="tab" aria-expanded="true">HOME</a></li>
                    <li class="{{ Request::is('sports') ? "active" : '' }}"><a class="{{ Request::is('sports') ? "current" : '' }}" href="/sports" data-toggle="tab" aria-expanded="true">ADD A NEW COLLEGE</a></li>
                    <li class="{{ Request::is('print') ? "active" : '' }}"><a class="{{ Request::is('print') ? "current" : '' }}" href="/print" data-toggle="tab" aria-expanded="true">PRINT LIST</a></li>
                    <li>
                        <form method='POST' id="logout" action='./logout'>
                            {{csrf_field()}}
                            <a class="logoutButton" href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                        </form>
                    </li>
                @else
                <li class="{{ Request::is('/') ? "active" : '' }}"><a class="{{ Request::is('/') ? "current" : '' }}" href="./" data-toggle="tab" aria-expanded="true">Home</a></li>
                <li class="{{ Request::is('login') ? "active" : '' }}"><a class="{{ Request::is('sports') ? "current" : '' }}" href="./login" data-toggle="tab" aria-expanded="true">LOGIN</a></li>
                <li class="{{ Request::is('register') ? "active" : '' }}"><a class="{{ Request::is('print') ? "current" : '' }}" href="./register" data-toggle="tab" aria-expanded="true">REGISTER</a></li>
                @endif
            </ul>
    </div>


    <section>
        @yield('content')
    </section>

    <footer>
        COLLEGE SPORTS &copy; {{ date('Y') }} &nbsp;&nbsp;
    </footer>

  </div>

</body>
</html>
