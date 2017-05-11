@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="/login">
                    {{ csrf_field() }}
                    <table id="table"><tbody>
                    <tr><td><label for="email">E-Mail Address</label></td>
                    <td><input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    @if($errors->has('email'))
                        <div class="error">{{ $errors->first('email') }}</div>
                    @endif
                    </td></tr>
                    <tr><td><label for="password">Password</label></td>
                    <td><input id="password" type="password"name="password" required>
                    @if ($errors->has('password'))
                        <div class="error">{{ $errors->first('email') }}</div>
                    @endif
                    </td></tr>
                    <tr><td><label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</label></td></tr>
                    </tbody></table>
                    <br>
                    <input id="login" type="submit" class="btn btn-primary" value="Login">

                    <p><a href="./password/reset">Forgot Your Password?</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
