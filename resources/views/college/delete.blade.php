@extends('layouts.master')

@section('title')
    Confirm deletion: {{ $institution->college }}
@endsection

@section('content')

    <h1>Confirm deletion</h1>
    <form method='POST' action='./delete'>

        {{ csrf_field() }}

        <input type='hidden' name='id' value='{{ $institution->id }}'?>

        <h2>Are you sure you want to delete <em>{{ $institution->college }}</em>?</h2>

        <input type='submit' value='Yes, delete this college.' class='btn btn-danger'>

    </form>

@endsection
