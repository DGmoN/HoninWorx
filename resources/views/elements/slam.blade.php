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
      <a href="{{ route('logout') }}">Logout</a>
      @if($usr = Auth::user())
        @if($usr->isAdmin())
          <a href="{{ route('settings')}}">Settings</a>
        @endif
      @endif
    @endif
  </nav>
</header>
