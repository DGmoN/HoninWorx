@extends('layouts.app')

@section('head')
  <link rel='stylesheet' type='text/css' href='/css/post.css'>
  <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5aae994a35130a00131fea52&product=inline-share-buttons"></script>
@endsection

@section('content')

  @php
  $meta = json_decode($post->meta,true);
  @endphp

  <div class='post'>
    @include("elements.post.meta")
    @include("elements.post.item", ["post"=>$post])

  </div>
@endsection
