<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="h4 font-weight-bold">Dashboard</h2>
        </template>
        <Welcome />
        <Footer />
    </app-layout>
</template>

<script>
import { defineComponent } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import Welcome from '@/Pages/HomeDashboard.vue'
import Footer from '@/Shared/Footer.vue'

export default defineComponent({
    components: {
        AppLayout,
        Welcome,
        Footer,
    },
})
</script>
