<x-app-layout>
    <x-slot name="header">
        <div class="container-xl">

            <!-- Page title -->
            <div class="page-header d-print-none mt-3">
                <div class="row align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <div class="page-pretitle">
                            Admin
                        </div>
                        <h2 class="page-title">
                            {{ __('lumki::ui.manage_users') }}
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">

                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-vcenter table-mobile-md card-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Roles</th>
                                        <th class="w-1"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td data-label="Name">
                                            <div class="d-flex py-1 align-items-center">
                                                <span class="avatar me-2"
                                                    style="background-image: url(@if ($user->profile_photo_url) {{$user->profile_photo_url }} @else https://api.proxeuse.com/avatars/api/?name={{ urlencode($user->name) }}&color=fff&background={{ substr(md5($user->name), 0, 6) }} @endif)"></span>
                                                <div class="flex-fill">
                                                    <div class="font-weight-medium">{{ $user->name }}</div>
                                                    <div class="text-muted"><a href="#"
                                                            class="text-reset">{{ $user->email }}</a></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-muted" data-label="Role">
                                            {{ $user->getRoleNames()->join(", ") }}
                                        </td>
                                        <td>
                                            <div class="btn-list flex-nowrap">
                                                <a class="btn btn-outline-indigo" href="{{ route('lumki.users.edit', $user) }}">{{ __('lumki::ui.edit_roles') }}</a>
                                                @if(\Auth::id() != $user->id)
                                                <a class="btn btn-outline-warning" href="{{ route('impersonate', $user->id) }}">{{ __('lumki::ui.impersonate') }}</a>
                                                @endif
                                            </div>
                                        </td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
