<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
    </div>
    <div class="card-body border-bottom py-3">
        <div class="d-flex">
            <div class="text-muted">
                Show
                <div class="mx-2 d-inline-block">
                    <input type="text" class="form-control form-control-sm" value="8" size="3"
                        aria-label="Invoices count">
                </div>
                entries
            </div>
            <div class="ms-auto text-muted">
                Search:
                <div class="ms-2 d-inline-block">
                    <input type="text" class="form-control form-control-sm"
                        aria-label="Search invoice">
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
                <tr>
                    <th class="w-1"><input class="form-check-input m-0 align-middle"
                            type="checkbox" aria-label="Select all invoices"></th>
                    <th class="w-1">No.
                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-sm text-dark icon-thick" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <polyline points="6 15 12 9 18 15" />
                        </svg>
                    </th>
                    <th>KEGIATAN</th>
                    <th>SKF</th>
                    {{-- <th>Tgl Mulai</th> --}}
                    <th>Interal<br>Waktu</th>
                    <th>Tanggal<br>Berakhir</th>
                    <th>Jumlah<br>SubKegiatan</th>
                    <th>IsKab</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $item)
                <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox"
                            aria-label="Select invoice"></td>
                    <td><span class="text-muted">001401</span></td>
                    <td><a href="#" class="text-reset" tabindex="-1">{{strtoupper(optional($item->basisKegiatan)->name)}} TAHUN {{$item->tahun}}</a></td>
                    <td>
                        {{-- <span class="flag flag-country-us"></span> --}}
                        {{$item->user->name}}
                    </td>
                    <td>{{$item->intervalWaktu->name}}</td>
                    <td>{{$item->tgl_berakhir_for_humans}}</td>
                    <td>{{$item->children->count()}}</td>
                    <td>
                        <span class="badge bg-success me-1"></span> {{$item->is_kab}}
                    </td>
                    <td class="text-end">
                        <span class="dropdown">
                            <button class="btn dropdown-toggle align-text-top"
                                data-bs-boundary="viewport"
                                data-bs-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                    Action
                                </a>
                                <a class="dropdown-item" href="#">
                                    Another action
                                </a>
                            </div>
                        </span>
                    </td>
                </tr>

                @empty
                <tr>
                    <td colspan="8" class="text-center">TIDAK ADA KEGIATAN BULAN INI</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer d-flex align-items-center">
        {{ $projects->links() }}
        {{-- <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of
            <span>16</span> entries
        </p>
        <ul class="pagination m-0 ms-auto">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                    <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="15 6 9 12 15 18" />
                    </svg>
                    prev
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
                <a class="page-link" href="#">
                    next
                    <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="9 6 15 12 9 18" />
                    </svg>
                </a>
            </li>
        </ul> --}}
    </div>
</div>
