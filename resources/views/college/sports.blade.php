@extends('layouts.master')

@section('content')

    <form method="POST" action="./sports">
        {{ csrf_field() }}

        <p> Please submit the sports offered at a college via this form.</p>
        <div id="table"><h4>COLLEGE INFORMATION</h4>
        </br>
        <table><tbody>

        <tr><td><label for="college">Name of the College &#42;</label></td>
        <td><input required type="text" maxlength="40" size="60" name="college" id="college"></td></tr>

        <tr><td><label for="logo">Link to College Logo &#42;</label></td>
        <td><input required type="text" size="60" name="logo" id="logo"></td></tr>

        <tr><td><label for="level">Level &#42;</label></td>
        <td><select required name="level" id="level">
            <option value="">select</option>
            <option value="Division I">Division I</option>
            <option value="Division II">Division II</option>
            <option value="Division III">Division III</option>
        </select></td></tr>
        <tr><td><label for="type">College Type &#42;</label></td>
        <td><label><input required type="radio" name="type" id="type">  Public</label>
            <label><input required type="radio" name="type" id="type">  Private</label>
        </td></tr>
        </tbody></table></div>

        <label>Sports</label>
        <ul id='sports'>
            @foreach($sportsForCheckboxes as $id => $categories)
                <li><input
                    type='checkbox'
                    value='{{ $id }}'
                    id='sport_{{ $id }}'
                    name='sports[]'
                >&nbsp;
                <label for='sport_{{ $id }}'>{{ $categories }}</label></li>
            @endforeach
        </ul>

        <p> &#42;: required fields</p>

        <div class="form-group">
            <input type='submit' class="btn btn-primary" id="submit" value="Add">
        </div>
    </form>
@endsection

@if(count($errors) > 0)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
