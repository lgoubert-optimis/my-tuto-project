<script setup lang="ts">
import Layout from '@/layouts/AppLayout.vue'
import { Head } from '@inertiajs/vue3'

defineProps({
    object: Object
})

</script>

<template>
  <Layout>
    <Head title="Blog" />
    <div>{{ object }}</div>
  </Layout>
</template>
