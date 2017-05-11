@extends('layouts.master')

@section('title')
    Edit Entries
@endsection

@section('content')

    <form method="POST" action="/edit/{{ $id }}">
        {{ csrf_field() }}


        <h4>EDIT COLLEGE INFORMATION</h4>
        <br>
        <table id="table"><tbody>

        <tr><td><label for="college">Name of the College &#42;</label></td>
        <td><input required pattern="[a-zA-Z\s]+" type="text" maxlength="40" size="60" name="college"
              value="{{ old('college', $institution->college) }}" id="college"></td></tr>

        <tr><td><label for="logo">Link to College Logo &#42;</label></td>
        <td><input required type="text" size="60" name="logo"
              value="{{ old('logo', $institution->logo) }}" id="logo"><br><span id="logoNote">Please check the url to
                make sure it links to the college logo, otherwise this entry may not be added.</span></td></tr>

        <tr><td><label for="level">Level &#42;</label></td>
        <td><select required name="level" id="level">
            <option value="">select</option>
            <option value="Division I">Division I</option>
            <option value="Division II">Division II</option>
            <option value="Division III">Division III</option>
        </select></td></tr>

        <tr><td><label for="type">College Type &#42;</label></td>
        <td class="type"><label><input required type="radio" name="type" id="type" value="Public">&#160;Public</label>
            <label><input required type="radio" name="type" id="type" value="Private">&#160;Private</label>
        </td></tr>
        </tbody></table>
        <p class="sportslabel">Sports</p>
            <ul id='sports'>
                @foreach($sportsForCheckboxes as $id => $name)
                    <li><input
                        type='checkbox'
                        value='{{ $id }}'
                        name='sports[]'
                        {{ (in_array($name, $sportsForThisInstitution)) ? 'CHECKED' : '' }}
                    >
                    {{ $name }} <br></li>
                @endforeach
            </ul><br>
        <div class="form-group">
            <input type='submit' class="btn btn-primary" id="submit" value="Save">
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
