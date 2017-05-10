@extends('layouts.master')

@section('title')
    {{ $institution->college }}
@endsection

@section('content')

    <h4>{{ $institution->college }}</h4>

    <a href='/sports/{{ $institution->id }}'><img class='Logo' src='{{ $institution->logo }}' height="150" alt='{{ $institution->college }} logo'></a>
    </br>
    <p id="showInfo">

    * Level: {{ $institution->level }} *&#160;&#160;&#160;* Type: {{ $institution->type }} *</p>

    <p id="showInfo">* Last updated: {{ $institution->updated_at }} *</p>

    <p id="showInfo"><strong>SPORTS: </strong>
      @foreach($institution->sports as $sport)
          {{ $sport->categories }},
      @endforeach
    </p>

    <p id="showIcons">
        <a class='institutionAction' href='./{{ $previous }}'><i class='fa fa-arrow-circle-left fa-fw'></i></a>
        <a class='institutionAction' href='./edit/{{ $institution->id }}'><i class='fa fa-pencil fa-fw'></i></a>
        <a class='institutionAction' href='./delete/{{ $institution->id }}'><i class='fa fa-trash fa-fw'></i></a>
        <a class='institutionAction' href='./{{ $next }}'><i class='fa fa-arrow-circle-right fa-fw'></i></a>
    </p>

@endsection
