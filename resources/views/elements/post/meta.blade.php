<div class='meta pool'>
@foreach ($meta as $key => $v)
  @switch($key)
    @case('description')
    <h3 class='meta head' >Description<hr></h3>

    <p class='desc'>
      {{$v}}
    </p>
    @break
    @case('tags')
    <h3 class='meta head' >Tags<hr></h3>
    <div class='tag_list'>
      @foreach ($meta[$key] as $value)
        <a class="btn" href="{{route('tag_list', $value)}}">{{$value}}</a>
      @endforeach
    </div>
    @break
    @case('url')
    @if(!empty($v))
      <a class='meta head btn' href="{{$v}}"><h3>>>External<<</h3></a>
    @endif
    @break
  @endswitch
@endforeach
<h3 class='meta head'>Share<hr></h3>
  <div class="sharethis-inline-share-buttons"></div>
</div>
