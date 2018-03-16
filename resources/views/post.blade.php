@extends('layouts.app')

@section('content')
  <div class='post'>
    <div class='cstack'>
      @switch($post->type)
        @case("artwork")
        <img class='thumb big' src='{{Storage::url($post->thumb)}}'>
        <div class='meta pool'>
          <div>
            <h2>Description</h2>
            <p>
              {{$post->description}}
            </p>
          </div>
        </div>
        @break
        @case("template")
        <img src='{{Storage::url($post->thumb)}}'>
        <div class='meta htiled pool'>
          <div>
            <a href="{{$post->description}}" class="auth btn github">GitHub</a>
          </div>
        </div>
        @break
        @case("video")
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ejLo0PiAT7M" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <div class='meta htiled pool'>
          <div>
            <a href="{{$post->description}}" class="auth btn google">Youtube</a>
          </div>
        </div>
        @break
      @endswitch
    </div>
  </div>
@endsection
