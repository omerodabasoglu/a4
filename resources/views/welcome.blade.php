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

    <header>
        COLLEGE ACCEPTANCE PROFILE
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/profiler">Profiler</a></li>
                <li><a href="/entries">View Entries</a></li>
                <li><a href="/print">Print Profile</a></li>
            </ul>
        </nav>

    </header>
    <div id="homepage">
        <p>
            This application is designed to assist college counselors who might be looking for a tool to create
            a College Acceptance Profile for the graduating senior students. The application takes in some data
            as described below, and then creates a profile page with the acceptance information of the graduating
            students.
        </p></br>

            <ol>
                <li>Name of your high school is entered in this field</li></br>
                <li>This is the year that the students are graduating</li></br>
                <li>Starting with this field, you will be entering individual data for each college. First, type
                  the college name in this field.</li></br>
                <li>Enter the number of students who have been accepted by the college that you entered above</li></br>
            </ol>

        <p>
            Once all data is entered for a specific college, click on "Add" button to add the current entry. Repeat these steps for
            all colleges that accepted your students this year. You can view and modify your entries by clicking
            on "View Entries". After adding the last college, click on "Print Profile" to complete the process.
        </p>
  </div>
</body>
    <footer>
        &copy; {{ date('Y') }} &nbsp;&nbsp;
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="/js/locator.js"></script>

</html>
