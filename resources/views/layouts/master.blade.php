<!DOCTYPE html>
<html lang="en-us">
<head>

    <title>@yield('title', 'Assignment 4')</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah%7CUbuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css" />
    <link rel="stylesheet" href="css/college.css" />

</head>
<body>
  <div id='content'>
      @if(Session::get('message') != null)
          <div class='message'>{{ Session::get('message') }}</div>
      @endif
    <header>
        @yield('header', 'COLLEGE ACCEPTANCE PROFILE')
    </header>

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
