<template>
  <div>
    <h1 class="mb-8 font-bold text-3xl">
      <inertia-link class="text-indigo-400 hover:text-indigo-600" :href="route('projects')">Project</inertia-link>
      <span class="text-indigo-400 font-medium"> / </span>
      {{ project.title }}
    </h1>
  </div>
</template>

<script>
import Layout from "@/Layouts/AppLayout.vue"
import Footer from '@/Shared/Footer.vue'

export default {
  layout: Layout,
  metaInfo() {
    return { title: this.project.title }
  },
  props: {
    project: Object,
  },
}
</script>
