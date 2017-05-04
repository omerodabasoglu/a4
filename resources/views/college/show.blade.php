@extends('layouts.master')

@section('title')
    {{ $institution->college }}
@endsection

@section('content')

    <h2>{{ $institution->college }}</h2>

    <a href='/{{ $institution->id }}'><img class='Logo' src='{{ $institution->logo }}' height="150" alt='{{ $institution->college }} logo'></a>

    <p>

    Level: {{ $institution->level }} .....

    Type: {{ $institution->type }} .....

    Added on: {{ $institution->created_at }} .....

    Last updated: {{ $institution->updated_at }} .....

    <a class='institutionAction' href='./edit/{{ $institution->id }}'><i class='fa fa-pencil'></i></a>
    <a class='institutionAction' href='./{{ $institution->id }}/delete'><i class='fa fa-trash'></i></a>

    </p>

@endsection
