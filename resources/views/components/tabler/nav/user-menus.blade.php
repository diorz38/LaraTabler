<div class="nav-item dropdown d-none d-md-flex me-3">
    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
        aria-label="Show notifications">
        <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path
                d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
            <path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
        <span class="badge bg-red"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
        <div class="card">
            <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet
                consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod
                repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.
            </div>
        </div>
    </div>
</div>

<div class="nav-item dropdown">
    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
        aria-label="Open user menu">
        <span class="avatar avatar-sm"
            style="background-image: url(@if (Auth::user()->profile_photo_url) {{ Auth::user()->profile_photo_url }} @else https://api.proxeuse.com/avatars/api/?name={{ urlencode(Auth::user()->name) }}&color=fff&background={{ substr(md5(Auth::user()->name), 0, 6) }} @endif)">
        </span>
        <div class="d-none d-xl-block ps-2">
            <div>{{ Auth::user()->name }}</div>
            <div class="mt-1 small text-muted">{{ Auth::user()->email }}</div>
        </div>
    </a>
    {{-- @lumki --}}
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <a href="{{ route('profile.show') }}" class="dropdown-item">Profile Settings</a>
        <div class="hr-text hr-text-left mt-3 mb-2 px-3">Admin</div>

        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
            <h6 class="dropdown-header">
                {{ __('Manage Team') }}
            </h6>
            <!-- Team Settings -->
            <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                {{ __('Team Settings') }}
            </x-jet-dropdown-link>

            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
            <x-jet-dropdown-link href="{{ route('teams.create') }}">
                {{ __('Create New Team') }}
            </x-jet-dropdown-link>
            @endcan
            <hr class="mt-0 mb-0">
            <!-- Team Switcher -->
            <h6 class="dropdown-header">
                {{ __('Switch Teams') }}
            </h6>

            @foreach (Auth::user()->allTeams() as $team)
            <x-jet-switchable-team :team="$team" />
            @endforeach
        @endif

        @role('Superadmin')
            @if(@lumki)
                {{-- @lumki --}}
                <x-jet-dropdown-link href="{{ route('lumki.users.index') }}">
                    {{ __('Users') }}
                </x-jet-dropdown-link>
                <x-jet-dropdown-link href="{{ route('lumki.roles.index') }}">
                    {{ __('Roles') }}
                </x-jet-dropdown-link>
                <x-jet-dropdown-link href="{{ route('lumki.permissions.index') }}">
                    {{ __('Permissions') }}
                </x-jet-dropdown-link>
                <hr class="mt-0 mb-0">
            @endif
        @endrole

        {{-- If Modules Exist --}}
        {{-- <div class="hr-text hr-text-left mt-3 mb-2 px-3">Apliaksi</div>
        <div class="hr-text hr-text-left mt-3 mb-2 px-3">Apliaksi</div>
        @foreach (Module::all() as $item)
            <a href="{{ route($item->getLowerName()) }}" class="dropdown-item">{{ $item }}</a>
        @endforeach
            <hr class="mt-0 mb-0">--}}

        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
        <a href="{{ route('api-tokens.index') }}" class="dropdown-item">{{ __('API Tokens') }}</a>
        @endif

        <a href="#" class="dropdown-item">Feedback</a>
        <hr class="mt-0 mb-0">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="dropdown-item">
                Logout
            </button>
        </form>
    </div>
</div>
