<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://www.facebook.com/profile.php?id=100014399047129">
      <img src="https://int-dir.s3.amazonaws.com/uploads/930_930_Contacts-icon.png" alt="Bulma: a modern CSS framework based on Flexbox" width="50" height="80">
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
