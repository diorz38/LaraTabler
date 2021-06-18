<div class="navbar-nav flex-row order-md-last">
    @guest
    <div class="nav-item d-none d-md-flex me-3">

      @if (Route::has('login'))
      <div class="btn-group" role="group" aria-label="Basic example">
          <a href="{{ route('login') }}" type="button" class="btn btn-outline-primary">Login</a>
          @if (Route::has('register'))
              <a href="{{ route('register') }}" type="button" class="btn btn-outline-primary">Register</a>
          @endif
      </div>
      @endif

    </div>
    @endguest
    @auth
    <div class="nav-item dropdown d-none d-md-flex me-3">
      <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
        <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
        <span class="badge bg-red"></span>
      </a>
      <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
        <div class="card">
          <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.
          </div>
        </div>
      </div>
    </div>

    <div class="nav-item dropdown">
      <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
        <div class="d-none d-xl-block ps-2">
          <div>{{ Auth::user()->name }}</div>
          <div class="mt-1 small text-muted">{{ Auth::user()->email }}</div>
        </div>
      </a>
      <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <a href="#" class="dropdown-item">Set status</a>
        <a href="{{ route('profile.show') }}" class="dropdown-item">Profile & account</a>
        <a href="#" class="dropdown-item">Feedback</a>
        <div class="dropdown-divider"></div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a href="#" class="dropdown-item">Settings</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
            class="dropdown-item">Logout</a>
        </form>
      </div>
    </div>

    @endauth
</div>
