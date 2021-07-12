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
                            <!-- Page title actions -->
                            {{ __('lumki::ui.manage_permissions') }}
                        </h2>
                    </div>
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <a class="btn btn-indigo" href="{{ route('lumki.permissions.create') }}">
                                {{ __('lumki::ui.create_permission') }}
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
                <div class="row align-items-center">
                    @foreach ($permissions as $permission)
                    <div class="col-md-6 col-xl-3">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            {{ $permission->name }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div>
            {{ $permissions->links() }}
        </div>

    </div>

</x-app-layout>
