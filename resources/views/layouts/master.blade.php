<!DOCTYPE html>
<html lang="en-us">
<head>

    <title>@yield('title', 'Assignment 4')</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah%7CUbuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="css/college9.css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="js/locator.js" />
</head>
<body>
  <div id='content'>
      @if(Session::get('message') != null)
          <div class='message'>{{ Session::get('message') }}</div>
      @endif
    <header>
        @yield('header', 'COLLEGE SPORTS')
    </header>


                <ul class="nav nav-tabs">
                    <li class=""><a href="./" data-toggle="tab" aria-expanded="true">Home</a></li>
                    <li class=""><a href="./sports" data-toggle="tab" aria-expanded="true">Add a new College</a></li>
                    <li class=""><a href="./print" data-toggle="tab" aria-expanded="true">Print List</a></li>
                </ul>




    <section>
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }} &nbsp;&nbsp;
    </footer>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="/js/locator.js"></script>
</body>
</html>
