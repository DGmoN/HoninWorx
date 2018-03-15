<header class='slam'>
  <div class='logo'>
  </div>
  <nav class='nav hori'>
    <a href="{{ route('gallery') }}">Gallery</a>
    <a href="{{ route('hire') }}">Hire me</a>
    <a href="{{ route('home') }}">HoninWorx</a>
    <a href="{{ route('vids') }}">Vids</a>
    @guest
      <a href="{{ route('login') }}">Login</a>
    @else
      <a href="{{ Auth::logout()}}">Logout</a>
    @endif
  </nav>
</header>
