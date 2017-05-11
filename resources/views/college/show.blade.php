@extends('layouts.master')

@section('title')
    {{ $institution->college }}
@endsection

@section('content')

    <h4>{{ $institution->college }}</h4>

    <a href='/sports/{{ $institution->id }}'><img class='Logo' src='{{ $institution->logo }}' height="150" alt='{{ $institution->college }} logo'></a>
    <br>
    <p class="showInfo">

    * Level: {{ $institution->level }} *&#160;&#160;&#160;* Type: {{ $institution->type }} *</p>

    <p class="showInfo">* Last updated: {{ $institution->updated_at }} *</p>

    <p class="showInfo"><strong>SPORTS: </strong>
      @foreach($institution->sports as $sport)
          {{ $sport->categories }},
      @endforeach
    </p>

    <p id="showIcons">
        <a class='institutionAction' href='./{{ $previous }}'><img src="{{ asset('css/arrows-left.png') }}" alt="Previous" ></a>
        <a class='institutionAction' href='./edit/{{ $institution->id }}'><img src="{{ asset('css/edit48.png') }}" alt="Edit" ></a>
        <a class='institutionAction' href='./delete/{{ $institution->id }}'><img src="{{ asset('css/delete.png') }}" alt="Delete" ></a>
        <a class='institutionAction' href='./{{ $next }}'><img src="{{ asset('css/arrow-right.png') }}" alt="Next" ></a>
    </p>

@endsection
