<div class='main_content'>
@switch($post->type)
  @case('artwork')
    <img src='{{Storage::url($post->thumb)}}'>
  @break
  @case('template')
  @break
  @case('video')
  <iframe width="560" height="315" src="{{$meta['url']}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  @break
@endswitch
</div>
