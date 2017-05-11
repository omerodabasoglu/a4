@extends('layouts.master')

@section('title')
    Print Entries
@endsection

@section('content')
<h2><a href="./print/pdf">Print page</a></h2>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-12 col-md-auto">
    <table class="table table-hover col-6">
        <thead>
            <tr>
                <th id="cellId">ID</th>
                <th id="cellLogo">Logo</th>
                <th id="cellCollege">College</th>
                <th id="cellLevel">Level</th>
                <th id="cellType">Type</th>
                <th id="cellSports">Sports</th>
            </tr>
        </thead>
        <tbody>
            @foreach($newInstitutions as $institution)

                <tr>
                    <td>{{ $institution->id }}</td>
                    <td><img class="Logo" src="{{ $institution->logo }}" alt="{{ $institution->college }} logo" height="40"</td>
                    <td>{{ $institution->college }}</td>
                    <td>{{ $institution->level }}</td>
                    <td>{{ $institution->type }}</td>
                    <td>
                        @foreach($institution->sports as $sport)
                            {{ $sport->categories }},
                        @endforeach
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
  </div>
  </div>
</div>

@endsection
