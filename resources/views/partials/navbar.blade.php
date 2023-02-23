<nav class="navbar navbar-expand-lg bg-body-tertiary -mb-2">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link {{ ($active === 'home') ? 'active' : ''}}" aria-current="page" href="/">Home</a>
        </li>

        <li class="nav-item">
        <a class="nav-link {{ ($active === 'about') ? 'active' : ''}}" href="/about">About</a>

        </li>

            <li class="nav-item">
        <a class="nav-link {{ ($active === 'posts') ? 'active' : ''}}" href="/blog">Blog</a>

        </li>

            <li class="nav-item">
        <a class="nav-link {{ ($active === 'categories') ? 'active' : ''}}" href="/categories">Categories</a>

        </li>

        
       
      </ul>
      <ul class="navbar-nav">
        @auth
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <form action="/logout" method="post">
              @csrf
              <button class="dropdown-item" type="submit">Logout</button>
            </form>
          </ul>
        </li>
        @else
        <li class="nav-item">
        <a class="nav-link {{ ($active === 'login') ? 'active' : ''}} "  href="/login">Login</a>

        </li>
          
        @endauth
      </ul>
    </div>
  </div>
</nav>