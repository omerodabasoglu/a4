@extends('layouts.master')

@section('content')

    <form method="POST" action="/edit/{{ $id }}">
        {{ csrf_field() }}

        <p> Please submit the sports offered at a college via this form.</p>
        <div id="table"><h4>COLLEGE INFORMATION</h4>
        </br>
        <table><tbody>

        <tr><td><label for="college">Name of the College &#42;</label></td>
        <td><input required type="text" maxlength="40" size="60" name="college"
              value="{{ old('college', $institution->college) }}" id="college"></td></tr>

        <tr><td><label for="logo">Link to College Logo &#42;</label></td>
        <td><input required type="text" size="60" name="logo"
              value="{{ old('logo', $institution->logo) }}" id="logo"></td></tr>

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
            </ul>
        <div class="form-group">
            <input type='submit' class="btn btn-primary" id="submit" value="Save">
        </div>
    </form>

    @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection
