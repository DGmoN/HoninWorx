@extends('layouts.app')

@section('head')
    <link rel='stylesheet' type='text/css' href='/css/auth.css'>
@endsection

@section('content')
  @if(isset($Failure))
    <h3 class="page head">There was a porblem with the post: {{$Failure}}</h3>
  @endif
  <div class='post'>
    <form class='cstack pool cform' id='post' method='post' enctype="multipart/form-data">
      <h2 class="page head">Post</h2>
      {{ csrf_field() }}
      <div class='cstack'>
        <lable for="name">Name</lable>
        <input class='auth' id='name' type='text' name='name' placeholder="Artifact name">
        <lable for="type">Type</lable>
        <select name='type' id='type'>
          <option value='artwork'>Artwork</option>
          <option value='template'>Template</option>
          <option value='video'>Video</option>
        </select>
        <lable for="thumbnail">Thumbnail</lable>
        <input type='file' name='thumb' id='thumbnail'>
        <lable for="det">Meta Data Json</lable>
        <textarea name='meta' id='det' form='post'>
        </textarea>
      </div>
      <input type='submit' class='auth btn' value='submit'>
    </form>
  </div>

@endsection
