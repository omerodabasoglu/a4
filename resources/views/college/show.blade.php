@extends('layouts.master')

@section('title')
    {{ $institution->college }}
@endsection

@section('content')

    <h2>{{ $institution->college }}</h2>

    <a href='/{{ $institution->id }}'><img class='Logo' src='{{ $institution->logo }}' height="150" alt='{{ $institution->college }} logo'></a>

    <p>

    Level: {{ $institution->level }}  *          *

    Type: {{ $institution->type }}</p>

    <p>Added on: {{ $institution->created_at }} *          *

    Last updated: {{ $institution->updated_at }} </p>

    <p>
        <a class='institutionAction' href='./{{ $previous }}'><i class='fa fa-arrow-circle-left fa-fw'></i></a>
        <a class='institutionAction' href='./edit/{{ $institution->id }}'><i class='fa fa-pencil fa-fw'></i></a>
        <a class='institutionAction' href='./{{ $institution->id }}/delete'><i class='fa fa-trash fa-fw'></i></a>
        <a class='institutionAction' href='./{{ $next }}'><i class='fa fa-arrow-circle-right fa-fw'></i></a>
    </p>

@endsection
