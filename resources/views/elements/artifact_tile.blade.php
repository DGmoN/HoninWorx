<div class='tile'>
<a href='{{route('view_post', $artifact->id)}}' class='pool thumb showcase'  id='latest_art' style='background-image: URL({{Storage::url($artifact->thumb)}}); margin: 5px auto;'>
  {{$artifact->name}}
</a>
</div>
