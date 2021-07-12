<div class="navbar navbar-expand-md navbar-light bg-white border-bottom sticky-top">
    <div class="container-xl">
        <!-- Logo -->
        <a class="navbar-brand mr-4" href="/">
            <x-jet-application-mark width="36" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

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
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-jet-nav-link>
            </ul>

        </div>
        <x-tabler.nav.user-menus/>

        <!-- Right Side Of Navbar -->

    </div>
</div>
