@extends('layouts.master')

@section('title')
    View Entries
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-12 col-md-auto">
    <table class="table table-striped table-hover col-6">
        <thead>
            <tr>
                <th>ID</th>
                <th>Logo</th>
                <th>College</th>
                <th>Level</th>
                <th>Type</th>
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
                      <a class='institutionAction' href='./edit/{{ $institution->id }}'><i class='fa fa-pencil'></i></a>
                      <a class='institutionAction' href='./{{ $institution->id }}'><i class='fa fa-eye'></i></a>
                      <a class='institutionAction' href='./delete/{{ $institution->id }}'><i class='fa fa-trash'></i></a>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
  </div>
  </div>
</div>

@endsection
