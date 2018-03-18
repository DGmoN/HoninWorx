@extends('layouts.app')

@section('head')
    <link rel='stylesheet' type='text/css' href='/css/auth.css'>
@endsection

@section('content')
<div class="post">
  @yield("form")
  <!--
  <p class="sub head">Or Use Social Login</p>
  @include('elements.socials')
-->
</div>
@endsection
