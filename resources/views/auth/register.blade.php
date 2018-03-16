@extends('auth.auth')

@section('form')

      <form id='login_form' class='cstack pool' method='post'>
        {{ csrf_field() }}
        <h2 class="page head">Register:</h2>
        @if(Session::has('message'))
            <div class="alert-{{ Session::get('status') }}">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                {{ Session::get('message') }}
            </div>
        @endif
        <label for='name'>Name</label>
        <input id="name" type="text" class="auth {{ $errors->has('name') ? '' : 'invalid' }}" name="name" value="{{ old('name') }}" required autofocus>
        @if ($errors->has('name'))
            <span class="error">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
        <label for="email" class="sr-only">Email address</label>
        <input id="email" type="email" class="auth {{ $errors->has('email') ? '' : 'invalid' }}" name="email" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <label for="password" class="sr-only">Password</label>
        <input id="password" type="password" class="auth {{ $errors->has('password') ? '' : 'invalid' }}" name="password" required>
        @if ($errors->has('password'))
            <span class="error">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <label for="password_confirm" class="sr-only">Re-enter Password</label>
        <input id="password-confirm" type="password" class="auth" name="password_confirmation" required>
        <input type='submit' class="auth btn" value='Register'>
      </form>


@stop
