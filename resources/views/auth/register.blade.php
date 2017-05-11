@extends('layouts.master')

@section('title')
    Register
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-body">
                <form class="form-horizontal" method="POST" id="register" action="{{ route('register') }}">
                    {{ csrf_field() }}

                        <table id="table"><tbody>
                        <tr><td><label for="name">* Name</label></td>
                        <td><input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                        @if($errors->has('name'))
                            <span class="help-block">
                                <div class="error">{{ $errors->first('name') }}</div>
                            </span>
                        @endif
                        </td></tr>
                        <tr><td><label for="email">* E-Mail Address</label></td>
                        <td><input id="email" type="email" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <div class="error">{{ $errors->first('email') }}</div>
                            </span>
                        @endif
                        </td></tr>
                        <tr><td><label for="password">* Password (min: 6)</label></td>
                        <td><input id="password" type="password" name="password" required >
                        @if ($errors->has('password'))
                            <div class="error">{{ $errors->first('password') }}</div>
                        @endif
                        </td></tr>
                        <tr><td><label for="password-confirm">* Confirm Password</label></td>
                        <td><input id="password-confirm" type="password" name="password_confirmation" required >
                        </td></tr>
                       </tbody></table>
                        <br><p>* Required fields</p>
                        <input id="register" type="submit" class="btn btn-primary" value="Register">

                    </form>
                  </div>
              </div>
            </div>
        </div>

@endsection
