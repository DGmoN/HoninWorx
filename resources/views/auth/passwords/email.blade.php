@extends('layouts.app')

@section('head')
    <link rel='stylesheet' type='text/css' href='/css/auth.css'>
@endsection

@section('content')
<div class='post'>
  <form id='login_form' method="POST" action="{{ route('password.email') }}" class='cstack pool'>
    <h2 class="page head">Reset Password: </h2>
      @csrf
          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>


          <input id="email" type="email" class="auth {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

          @if ($errors->has('email'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
          <button type="submit" class="auth btn">
              {{ __('Send Password Reset Link') }}
          </button>
  </form>
</div>
@endsection
