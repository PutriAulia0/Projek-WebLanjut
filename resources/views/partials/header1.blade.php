<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm custom-navbar">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('home') }}">
    <img src="{{ asset('images/CatLovers.png') }}" alt="CatLovers Logo" style="height: 40px;">
    Cute Cats
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active fw-bold' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('about') ? 'active fw-bold' : '' }}" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('contact') ? 'active fw-bold' : '' }}" href="{{ route('contact') }}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('gallery') ? 'active fw-bold' : '' }}" href="{{ route('gallery') }}">Gallery</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
