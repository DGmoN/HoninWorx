<header class='slam'>
  <div class='logo'>
  </div>
  <nav id="#" class='nav hori'>
    <a class='btn' href="{{ route('gallery') }}">Gallery</a>
    <a class='btn' href="{{ route('contact') }}">Contact</a>
    <a class='btn' href="{{ route('home') }}">HoninWorx</a>
    <a class='btn' href="{{ route('vids') }}">Vids</a>
    @guest
      <a class='btn' href="{{ route('login') }}">Login</a>
    @else
      <a class='btn' href="{{ route('logout') }}">Logout</a>
      @if($usr = Auth::user())
        @if($usr->isAdmin())
          <a class='btn' href="{{ route('settings')}}">Settings</a>
        @endif
      @endif
    @endif
  </nav>
</header>
