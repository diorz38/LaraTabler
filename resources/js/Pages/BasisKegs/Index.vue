<template>
    <Modal />

    <app-layout>
        <div class="container-xl">
            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <div class="page-pretitle">{{ $page.props.pagePretitle }}</div>
                        <h2 class="page-title">{{ $page.props.pageTitle }}</h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <span class="d-none d-sm-inline">
                                <Link href="#" class="btn btn-white btn-icon">
                                <IconPrint />
                                </Link>
                            </span>
                            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                                <IconPlus/>
                                Kegiatan Baru
                            </a>
                            <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                                <IconPlus/>
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
                                <h3 class="card-title">Invoices</h3>
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
                                <table class="table card-table table-vcenter text-nowrap datatable">
                                    <thead>
                                        <tr>
                                            <th class="w-1">
                                                <input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices" />
                                            </th>
                                            <th class="w-1">
                                                No.
                                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                                <icon-chevrons-up />
                                            </th>
                                            <th>Nama Basis Kegiatan</th>
                                            <th>Bidang</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(basiskeg, index) in $page.props.basiskegs.data" :key="basiskeg.id">
                                            <td>
                                                <input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice" />
                                            </td>
                                            <td>
                                                <span class="text-muted">
                                                    {{ $page.props.basiskegs.from + index }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong> {{ basiskeg.name }}</strong>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="flag flag-country-us">{{ basiskeg.kf.short_name }}</span>
                                            </td>
                                            <td>
                                                <span class="flag flag-country-us">
                                                    <div v-if="basiskeg.is_active == 1"><icon-circle-check /></div>
                                                    <div v-else><icon-circle-x /></div>
                                                </span>
                                            </td>
                                            <td class="text-end">
                                                <Link class="btn btn-indigo btn-sm hover:text-indigo-600" :href="route('amake.basiskegs.edit', basiskeg.id)">UBAH</Link>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <TableFooter />
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
import IconPrint from '@/Shared/Icons/IconPrint.vue'
import IconPlus from '@/Shared/Icons/IconPlus.vue'
import IconChevronsUp from '@/Shared/Icons/IconChevronsUp.vue'
import IconCircleX from '@/Shared/Icons/IconCircleX.vue'
import IconCircleCheck from '@/Shared/Icons/IconCircleCheck.vue'
import TableFooter from '@/Pages/BasisKegs/TableFooter.vue'
import Modal from '@/Pages/BasisKegs/Modal.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'

export default defineComponent({
    components: {
        AppLayout,
        TableFooter,
        IconPrint,
        IconPlus,
        IconChevronsUp,
        IconCircleX,
        IconCircleCheck,
        Modal,
        Footer,
        Head,
        Link,
        metaInfo: { title: 'Basis Kegiatan' },
    },
})

</script>
