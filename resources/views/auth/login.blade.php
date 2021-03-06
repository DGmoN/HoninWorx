@extends('auth.auth')

@section('form')

      <form id='login_form' class='cstack pool' method='post'>
        {{ csrf_field() }}
        <h2 class="page head">Please sign in</h2>
        <label for="email" class="sr-only">Email address</label>
        @if ($errors->has('email'))
            <span class="error">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <input class='auth' type='email' placeholder="Email adress" id='email' name="email" required>
        <label for="password" class="sr-only">Password</label>
        @if ($errors->has('password'))
            <span class="error">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <input class='auth' type='password' placeholder="Password" id='password' name="password" required>
        <input class='auth btn' type='submit' value="Sign in" class="auth btn">
        <span>{{ __('Remember Me') }}<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> </span>
        <!--<p><a  href="{{ url('#') }}">Forgot password?</a></p>
        <p><a href="{{ url('register') }}">Register</a></p>-->
      </form>

@stop
