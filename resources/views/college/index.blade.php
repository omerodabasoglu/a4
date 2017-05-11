@extends('layouts.master')

@section('title')
    Assignment 4
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-12 col-md-auto">
    <p>Welcome to College Sports! This is an application that lets you add/modify colleges and
    the sports offered at these colleges. To add a new college, simply click on <strong>&#34;ADD A NEW COLLEGE&#34;</strong> button.
    Once the process is done, you can print the list of colleges and sports via <strong>&#34;PRINT LIST&#34;</strong> button.
    </p>
    <h4>&#123;&#123;  Most Recent Entries...  &#125;&#125;</h4>
    <table class="table table-hover col-6">
        <thead>
            <tr>
                <th id="cellLogo">Logo</th>
                <th id="cellCollege">College</th>
                <th id="cellLevel">Level</th>
                <th id="cellType">Type</th>
                <th id="cellSports">Sports</th>
                <th id="cellIcons"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($newInstitutions as $institution)

                <tr>
                    <td><img class="Logo" src="{{ $institution->logo }}" alt="{{ $institution->college }} logo" height="40"></td>
                    <td>{{ $institution->college }}</td>
                    <td>{{ $institution->level }}</td>
                    <td>{{ $institution->type }}</td>
                    <td>
                        @foreach($institution->sports as $sport)
                            {{ $sport->categories }},
                        @endforeach
                    </td>
                    <td>
                      <a class='institutionAction' href='./edit/{{ $institution->id }}'><img src="{{ asset('css/edit48.png') }}" alt="Edit" width="32"></a>
                      <a class='institutionAction' href='./sports/{{ $institution->id }}'><img src="{{ asset('css/eye.png') }}" alt="Show" width="32"></a>
                      <a class='institutionAction' href='./delete/{{ $institution->id }}'><img src="{{ asset('css/delete.png') }}" alt="Delete" width="32"></a>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
  </div>
  </div>
</div>

@endsection
