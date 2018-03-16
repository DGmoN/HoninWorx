@extends('layouts.app')

@section('head')
    <link rel='stylesheet' type='text/css' href='/css/auth.css'>
@endsection

@section('content')
  @if(isset($Failure))
    <h3 class="page head">There was a porblem with the post: {{$Failure}}</h3>
  @endif

  <div class='post'>
    <form class='cstack pool cform' method='post'>
      <h2 class="page head">Settings</h2>
      {{ csrf_field() }}
      <div class='cstack'>
        @php $state = \App\state::get_state("commission") @endphp
        <lable for="commission">Contracts</lable>
        <input class='auth' id='commission' type='checkbox' name='commission' {{ $state ? 'checked' : '' }}>
        @php $state = \App\state::get_state("Contract") @endphp
        <lable for="Contract">Contracts</lable>
        <input class='auth' id='Contract' type='checkbox' name='Contract' {{ $state ? 'checked' : '' }}>
      </div>
      <input type='submit' class='auth btn' value='submit'>
    </form>
    <a href="{{route('make_post')}}" class='auth btn'>Post</a>
  </div>

@endsection
