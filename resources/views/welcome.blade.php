@extends('layouts.app')

@section('content')
  <div class='post'>
    <div class='htiled'>
      <div class='tile'>

        <a href='{{route('view_post', $_latest_art_->id)}}' class='pool thumb showcase'  id='latest_art' style='background-image: URL({{Storage::url($_latest_art_->thumb)}});'>
            <label class='title'>Latest Artwork</lable>
        </a>
        @php $state = \App\state::get_state("commission") @endphp
        <a href='' >Commissions are <span class='state{{ $state ? ' open' : ' closed' }}'>{{ $state ? ' open' : ' closed' }}</state>.</a>
      </div>
      <div class='tile'>
        <a href='{{route('view_post', $_latest_temp_->id)}}' class='pool thumb showcase'  id='latest_art' style='background-image: URL({{Storage::url($_latest_temp_->thumb)}});'>
            <label class='title'>Latest template</lable>
        </a>
        @php $state = \App\state::get_state("Contract") @endphp
        <a href=''>Contracts are <span class='state{{ $state ? ' open' : ' closed' }}'>{{ $state ? ' open' : ' closed' }}</a>
      </div>
      <div class='tile'>
        <a href='{{route('view_post', $_latest_vid_->id)}}' class='pool thumb showcase'  id='latest_art' style='background-image: URL({{Storage::url($_latest_vid_->thumb)}});'>
          <label class='title'>Latest video</lable>
        </a>
        <a href=''>Browse videos</a>
      </div>
    </div>
  </div>
@endsection
