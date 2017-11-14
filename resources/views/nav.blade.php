<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://www.facebook.com/profile.php?id=100014399047129">
      <img src="https://scontent-mrs1-1.xx.fbcdn.net/v/t1.0-9/22815566_283615628795070_9212366100309995691_n.jpg?oh=973b16c3f7f2b0d9de5f00f365539fe5&oe=5A6C1C2A" alt="Bulma: a modern CSS framework based on Flexbox" width="50" height="80">
    </a>
    @auth
    <a class="navbar-item" >
      {{auth::user()->name}}
    </a>
    @endauth
    @guest
        <a class="navbar-item" href="{{ route('login') }}">Login</a>
        <a  class="navbar-item" href="{{ route('register') }}">Register</a>
    @endguest
  </div>
</nav>
