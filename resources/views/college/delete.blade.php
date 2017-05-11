@extends('layouts.master')

@section('title')
    Confirm deletion: {{ $institution->college }}
@endsection

@section('content')

    <h4>Confirm deletion</h4>
    <form method='POST' action='/delete'>

        {{ csrf_field() }}

        <input type='hidden' name='id' value='{{ $institution->id }}'>

        <h2>Are you sure you want to delete
        <br>
        <em><strong>{{ $institution->college }}</strong></em>?</h2>

        <input id="deleteButton" type='submit' value='Yes, delete this college.' class='btn btn-danger'>

    </form>

@endsection
