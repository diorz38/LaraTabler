<x-auth-layout>
    <div class="page-wrapper">
        <div class="container-xl">
            <!-- Page title -->
            <x-tabler.page-header title="Dashboard" subtitle="Overview" />
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-lg-6">
                        <x-tabler.widgets.chart01 class="row row-cards"/>
                    </div>
                    <div class="col-lg-6">
                        <x-tabler.widgets.chart02 class="card"/>
                    </div>

                    <div class="col-md-12 col-lg-8">
                        <x-tabler.widgets.chart03 class="card"/>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <x-tabler.widgets.chart04 class="card"/>
                    </div>
                    <x-tabler.datatable class="col-12"/>
                </div>
            </div>
        </div>
        <x-tabler.footer />
    </div>
    @push('script')
    @endpush
</x-auth-layout>
