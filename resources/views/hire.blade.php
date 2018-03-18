@extends('layouts.app')

@section('head')
  <link rel="stylesheet" type="text/css" href="/css/hire.css">
@endsection

@section('content')
  <h2 class="page head">Get in contact</h2>
    <div class='htiled'>
      <div class='' id='commissions'>
      @include('elements.example.artwork')
        <p>
          I sometimes take commissions and requests when I feel like doing some art.<br>
          If you are looking for a conseptual artist I also do that.<hr>
          @php $state = \App\state::get_state("commission") @endphp
          Commissions are <span class='state{{ $state ? ' open' : ' closed' }}'>{{ $state ? ' open' : ' closed' }}</span>.
        </p>
      </div>
      <div class='tile social list'>

      </div>
    </div>
@endsection
