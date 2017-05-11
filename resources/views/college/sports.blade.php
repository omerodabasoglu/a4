@extends('layouts.master')

@section('title')
    Add a new College
@endsection

@section('content')

    <form method="POST" action="./sports">
        {{ csrf_field() }}

        <p> Please submit the sports offered at a college via this form.</p>
        <h4>COLLEGE INFORMATION</h4>
        </br>
        <table id="table"><tbody>

        <tr><td><label for="college">Name of the College &#42;</label></td>
        <td><input required pattern="[a-zA-Z\s]+" type="text" maxlength="40" size="60" name="college" id="college"></td></tr>

        <tr><td><label for="logo">Link to College Logo &#42;</label></td>
        <td><input required type="text" size="60" name="logo" id="logo"></br><span id="logoNote">Please check the url to
          make sure it links to the college logo, otherwise this entry may not be added.</span></td></tr>

        <tr><td><label for="level">Level &#42;</label></td>
        <td><select required name="level" id="level">
            <option value="">select</option>
            <option value="Division I">Division I</option>
            <option value="Division II">Division II</option>
            <option value="Division III">Division III</option>
        </select></td></tr>
        <tr><td><label for="type">College Type &#42;</label></td>
        <td class="type"><label><input required type="radio" name="type" id="type" value="Public">  Public</label>
            <label><input required type="radio" name="type" id="type" value="Private">  Private</label>
        </td></tr>
        </tbody></table>

        <h3 class="sportslabel">SPORTS</h3>
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
