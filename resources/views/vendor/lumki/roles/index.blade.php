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
                            {{ __('lumki::ui.manage_roles') }}
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <a class="btn btn-indigo" href="{{ route('lumki.roles.create') }}">
                                {{ __('lumki::ui.create_role') }}
                            </a>
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
                                        <th>Role Name</th>
                                        <th>Permissions</th>
                                        <th class="w-1"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                    <tr>
                                        <td class="text-muted" data-label="Role Name">{{ $role->name }}</td>
                                        <td class="text-muted" data-label="Permissions">
                                            {{ $role->getPermissionNames()->join(", ") }}
                                        </td>
                                        <td class="text-muted" data-label="Actions">
                                            <div class="btn-list flex-nowrap">
                                                <a class="btn btn-outline-indigo" href="{{ route('lumki.roles.edit', $role) }}">{{ __('lumki::ui.edit_permissions') }}</a>
                                            </div>
                                        </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            {{ $roles->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
