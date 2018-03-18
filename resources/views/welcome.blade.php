@extends('layouts.app')

@section('content')
  <div class='post'>
    <div class='htiled'>
      @if($_latest_art_)
      <div class='tile'>
        <a href='{{route('view_post', $_latest_art_->id)}}' class='pool thumb showcase'  id='latest_art' style='background-image: URL({{Storage::url($_latest_art_->thumb)}});'>
            <label class='title'>Latest Artwork</lable>
        </a>
        @php $state = \App\state::get_state("commission") @endphp
        <a class='btn' href='' >Commissions are <span class='state{{ $state ? ' open' : ' closed' }}'>{{ $state ? ' open' : ' closed' }}</span>.</a>
      </div>
    @endif
      @if($_latest_temp_)
      <div class='tile'>
        <a href='{{route('view_post', $_latest_temp_->id)}}' class='pool thumb showcase'  id='latest_art' style='background-image: URL({{Storage::url($_latest_temp_->thumb)}});'>
            <label class='title'>Latest template</lable>
        </a>
        @php $state = \App\state::get_state("Contract") @endphp
        <a href='' class='btn'>Contracts are <span class='state{{ $state ? ' open' : ' closed' }}'>{{ $state ? ' open' : ' closed' }}</a>
      </div>
    @endif
    @if($_latest_vid_)
      <div class='tile'>
        <a href='{{route('view_post', $_latest_vid_->id)}}' class='pool thumb showcase'  id='latest_art' style='background-image: URL({{Storage::url($_latest_vid_->thumb)}});'>
          <label class='title'>Latest video</lable>
        </a>
        <a href=''class='btn' >Browse videos</a>
      </div>
    @endif
    </div>
  </div>
@endsection
