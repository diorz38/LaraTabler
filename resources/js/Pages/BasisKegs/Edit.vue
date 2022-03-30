<template>
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
                            <Link :href="route('amake.basiskegs.index')" class="btn btn-primary d-none d-sm-inline-block" aria-label="Kembali Ke Daftar"> <icon-chevrons-left />Kembali Ke Daftar </Link>
                            <Link :href="route('amake.basiskegs.index')" class="btn btn-primary d-sm-none btn-icon" aria-label="Kembali Ke Daftar">
                                <icon-chevrons-left />
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{ form.kd }}</h3>
                            </div>
                            <div class="card-body">
                                <form @submit.prevent="update">
                                    <div class="form-group mb-3 row">
                                        <label class="form-label col-3 col-form-label">Nama</label>
                                        <div class="col">
                                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="tuliskan Nama Basis Kegiatan" v-model="form.name" />
                                            <small class="form-hint">Tuliskan Secara Singkat dan Jelas</small>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="form-label">
                                            Catatan/Penjelasan
                                            <!-- <span class="form-label-description">56/100</span></label -->
                                        </label>
                                        <div class="col">
                                            <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Content.." spellcheck="false" v-model="form.note"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="form-label col-3 col-form-label">Bidang</label>
                                        <div class="col">
                                            <select class="form-select" v-model="form.bidang_id">
                                                <option>Pilih Bidang</option>
                                                <option v-for="bidang in $page.props.bidang" :key="bidang.id" v-bind:value="bidang.id" :selected="form.bidang_id == bidang.id">{{ bidang.name }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="form-label col-3 col-form-label">Seksi</label>
                                        <div class="col">
                                            <select class="form-select" v-model="form.seksi_id">
                                                <option>Pilih Seksi</option>
                                                <option v-for="seksi in $page.props.seksi" :key="seksi.id" v-bind:value="seksi.id" :selected="form.seksi_id == seksi.id">{{ seksi.name }}</option>
                                                <!-- <option v-bind:value=43 :selected="form.seksi_id == 43">Statistik Pertambangan, Energi dan Konstruksi</option>
                                                <option v-bind:value=40 :selected="form.seksi_id == 40">Statistik Industri</option>-->
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="form-label col-3 col-form-label pt-0">Status</label>
                                        <div class="col">
                                            <label class="form-check">
                                                <input type="radio" id="one" value="1" v-model="form.is_active" />
                                                <label for="one">Aktif</label>
                                                <br />
                                                <input type="radio" id="two" value="0" v-model="form.is_active" />
                                                <label for="two">Tidak Aktif</label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-warning">SIMPAN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Kegiatan Bidang Ini</h3>
                            </div>
                            <div class="card-body"></div>
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
import { Link } from '@inertiajs/inertia-vue3'
import IconChevronsLeft from '@/Shared/Icons/IconChevronsLeft.vue'

export default defineComponent({
    components: {
        AppLayout,
        Link,
        Footer,
        IconChevronsLeft,
        metaInfo: { title: 'Ubah Basis Kegiatan' },
    },
    // metaInfo() {
    //     return { title: this.form.title }
    // },
    props: {
        basiskeg: Object,
    },
    remember: 'form',
    data() {
        return {
            form: this.$inertia.form({
                kd: this.basiskeg.kd,
                name: this.basiskeg.name,
                bidang_id: this.basiskeg.bidang_id,
                seksi_id: this.basiskeg.seksi_id,
                note: this.basiskeg.note,
                is_active: this.basiskeg.is_active,
            }),
        }
    },
    methods: {
        update() {
            this.form.put(this.route('amake.basiskegs.update', this.basiskeg.id))
        },
        destroy() {
            if (confirm('Are you sure you want to delete this basiskeg?')) {
                this.$inertia.delete(this.route('amake.basiskegs.destroy', this.basiskeg.id))
            }
        },
        restore() {
            if (confirm('Are you sure you want to restore this basiskeg?')) {
                this.$inertia.put(this.route('basiskegs.restore', this.basiskeg.id))
            }
        },
    },
})
</script>
