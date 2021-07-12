<div class="sticky-top">
    <header class="navbar navbar-expand-md {{ request()->is('*dark*') ? 'navbar-dark' : 'navbar-light'}} d-print-none">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                {{-- @if (str_contains(Route::currentRouteName(), 'tabler'))
                    <a href="{{ route('tabler') }}">
                        <img src="{{ asset('static/tabler.svg') }}" width="150" height="52" alt="Tabler" class="navbar-brand-image">
                    </a>
                @elseif(str_contains(Route::currentRouteName(), 'amake'))
                    <a href="{{ route('amake') }}">
                        <img src="{{ asset('static/amake.svg') }}" width="150" height="52" alt="Tabler" class="navbar-brand-image">
                    </a>
                @else --}}
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset(request()->is('*dark*') ? 'static/logo-white.svg' : 'static/logo.svg') }}" width="150" height="52" alt="Tabler" class="navbar-brand-image">
                </a>
                {{-- @endif --}}

            </h1>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                    <ul class="navbar-nav">
                        {{-- @if (str_contains(Route::currentRouteName(), 'tabler'))
                            <x-tabler.nav.main-menus />
                        @elseif(str_contains(Route::currentRouteName(), 'amake')) --}}
                            <x-tabler.nav.main-menus />
                        {{-- @endif --}}
                    </ul>
                </div>
            </div>

            <div class="navbar-nav flex-row order-md-last">
                @guest
                <a class="nav-link" href="{{ route('login') }}">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                            <path d="M20 12h-13l3 -3m0 6l-3 -3" />
                        </svg>
                    </span>
                    <span class="nav-link-title">
                        login
                    </span>
                </a>
                @if (config('boilerplate.access.user.registration'))
                <a class="nav-link" href="{{ route('register') }}">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <rect x="5" y="11" width="14" height="10" rx="2" />
                            <circle cx="12" cy="16" r="1" />
                            <path d="M8 11v-5a4 4 0 0 1 8 0" />
                        </svg>
                    </span>
                    <span class="nav-link-title">
                        Daftar
                    </span>
                </a>
                @endif
                @else
                <x-tabler.nav.user-menus/>
            </div>
            @endguest
        </div>
    </header>
</div>
