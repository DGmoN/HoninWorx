@extends('layouts.app')

@section('content')
  <div class='post'>
    <h2 class="page head">{{$Title}}</h2>
    <div class='htiled'>
      @foreach ($artifacts as $id => $value)
        @include("elements.artifact_tile", ["artifact"=>$value])
      @endforeach
    </div>
  </div>

@endsection
