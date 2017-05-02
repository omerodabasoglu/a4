@extends('layouts.master')

@section('title')
    View Entries
@endsection

@push('head')
    https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.8/css/theme.jui.min.css
@endpush

@section('content')

    <table id="collegeTable" class="tablesorter">
        <thead>
            <tr>
                <th>ID</th>
                <th>Class of</th>
                <th>College</th>
                <th>Number of Students/th>
            </tr>
        </thead>
        <tbody>
            @foreach()

                <tr>
                    <td>{{ }}</td>
                    <td>{{ }}</td>
                    <td>{{ }}</td>
                    <td>{{ }}</td>

                </tr>

            @endforeach
        </tbody>
    </table>
        
@endsection
