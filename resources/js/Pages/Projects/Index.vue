<template>
    <app-layout title="Project">
            <div class="container-xl">
                <div class="page-header d-print-none">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">Overview</div>
                            <h2 class="page-title">Condensed layout</h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-auto ms-auto d-print-none">
                            <div class="btn-list">
                                <span class="d-none d-sm-inline">
                                    <a href="#" class="btn btn-white"> New view </a>
                                </span>
                                <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="12" y1="5" x2="12" y2="19" />
                                        <line x1="5" y1="12" x2="19" y2="12" />
                                    </svg>
                                    Create new report
                                </a>
                                <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="12" y1="5" x2="12" y2="19" />
                                        <line x1="5" y1="12" x2="19" y2="12" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Kegiatan Tahun ini</h3>
                                </div>
                                <div class="card-body border-bottom py-3">
                                    <div class="d-flex">
                                        <div class="text-muted">
                                            Show
                                            <div class="mx-2 d-inline-block">
                                                <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count" />
                                            </div>
                                            entries
                                        </div>
                                        <div class="ms-auto text-muted">
                                            Search:
                                            <div class="ms-2 d-inline-block">
                                                <input type="text" class="form-control form-control-sm" aria-label="Search invoice" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table card-table table-vcenter datatable">
                                        <thead>
                                            <tr>
                                                <th class="w-1" rowspan="2">
                                                    <input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices" />
                                                </th>
                                                <th class="w-1" rowspan="2">
                                                    No.
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <polyline points="6 15 12 9 18 15" />
                                                    </svg>
                                                </th>
                                                <th rowspan="2">Kegiatan/PJ</th>
                                                <th rowspan="2">Interval<br />Waktu</th>
                                                <th colspan="2">Jadwal</th>
                                                <th rowspan="2"></th>
                                                <th colspan="2">SubKegiatan</th>
                                                <th rowspan="2"></th>
                                            </tr>
                                            <tr>
                                                <th>Mulai</th>
                                                <th>Berakhir</th>
                                                <th>Jumlah</th>
                                                <th>Menurut<br />Jenis Kegiatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(project, index) in $page.props.projects.data" :key="project.id">
                                                <td>
                                                    <input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice" />
                                                </td>
                                                <td>
                                                    <span class="text-muted">{{ $page.props.projects.from + index }}</span>
                                                </td>
                                                <td>
                                                    <div class="col">
                                                        <div class="text-truncate">
                                                            <strong>{{ project.nama_induk }}</strong>
                                                        </div>
                                                        <div class="text-muted">
                                                            <span v-for="(jenis, index) in project.jenis_keg" :key="index"> {{ jenis }}; </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="flag flag-country-us"></span>
                                                    {{ project.interval_name }}
                                                </td>
                                                <td>{{ project.tgl_mulai }}</td>
                                                <td>{{ project.tgl_berakhir }}</td>
                                                <th></th>
                                                <td>{{ project.total_sub_keg }}</td>
                                                <td>
                                                    <span v-for="(jenis, index) in project.total_by_jenis_keg" :key="index">
                                                        <button v-if="jenis.total > 0" type="button" class="btn btn-sm mx-1 mb-1">
                                                            {{ jenis.name }}
                                                            <span v-if="jenis.name == 'persiapan'" class="badge bg-warning ms-2">{{ jenis.total }}</span>
                                                            <span v-if="jenis.name == 'pelaksanaan'" class="badge bg-indigo ms-2">{{ jenis.total }}</span>
                                                            <span v-if="jenis.name == 'pengolahan'" class="badge bg-green ms-2">{{ jenis.total }}</span>
                                                            <span v-if="jenis.name == 'evaluasi'" class="badge bg-grey ms-2">{{ jenis.total }}</span>
                                                            <!-- <span v-else class="badge bg-blue ms-2">{{ jenis.total }}</span> -->
                                                        </button>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer d-flex align-items-center">
                                    <p class="m-0 text-muted">
                                        Page: {{ $page.props.projects.current_page }} Showing <span>{{ $page.props.projects.from }}</span> to <span>{{ $page.props.projects.to }}</span> of <span>{{ $page.props.projects_count }}</span> entries
                                    </p>
                                    <ul class="pagination m-0 ms-auto">
                                        <li v-if="$page.props.projects.prev_page_url === null" :key="key" class="page-item disabled">
                                            <Link class="page-link" tabindex="-1" aria-disabled="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <polyline points="15 6 9 12 15 18" />
                                                </svg>
                                                prev
                                            </Link>
                                        </li>
                                        <li v-else class="page-item">
                                            <Link :href="$page.props.projects.prev_page_url" class="page-link" tabindex="-1" aria-disabled="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <polyline points="15 6 9 12 15 18" />
                                                </svg>
                                                prev
                                            </Link>
                                        </li>
                                        <li v-if="$page.props.projects.next_page_url === null" :key="key" class="page-item disabled">
                                            <Link class="page-link" tabindex="-1" aria-disabled="true">
                                                next
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <polyline points="9 6 15 12 9 18" />
                                                </svg>
                                            </Link>
                                        </li>
                                        <li v-else class="page-item">
                                            <Link :href="$page.props.projects.next_page_url" class="page-link" tabindex="-1" aria-disabled="false">
                                                next
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <polyline points="9 6 15 12 9 18" />
                                                </svg>
                                            </Link>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <Footer />
    </app-layout>
</template>

<script>
import { defineComponent } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import Footer from '@/Shared/Footer.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'

export default defineComponent({
    components: {
        AppLayout,
        Footer,
        Head,
        Link,
    },
})
</script>
