@extends('layouts.master')

@section('content')

    <form method="POST" action="./view">
        {{ csrf_field() }}
        <h3> &#42;: required fields</h3>
        </br>
        <label class="control-label" for="highschool">1) Name of the High School &#42;</label><br>
        <input required class="form-control" type="text" min="3" max="40" name="highschool" id="highschool"><br>

        <label class="control-label" for="classof">2) Class of &#42;</label><br>
        <select required name="classof" id="classof">
            <option value="">select</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
        </select>
      </br>
        <label class="control-label" for="college">3) Name of the College &#42;</label><br>
        <input required class="form-control" type="text" min="3" max="40" name="college" id="college"><br>

        <label class="control-label" for="students">4) &#35; of students &#42;</label><br>
        <input required class="form-control" type="text" min="3" max="40" name="students" id="students"><br>

        <label class="control-label" for="totalStudents">5) Total &#35; of students &#42;</label><br>
        <input required class="form-control" type="text" min="3" max="40" name="totalStudents" id="totalStudents"><br>

        <div class="form-group">
            <input type='submit' class="btn btn-primary" id="submit" value="Add to the Profile">
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
