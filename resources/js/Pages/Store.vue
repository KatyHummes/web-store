<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    user: Object,
    products: Array
});

</script>

<template>
    <AppLayout title="Store" :user="user">
        <template #header>
            <h2 class="font-medium font-serif text-2xl text-gray-800 leading-tight">
                Loja
            </h2>
        </template>
        <div>
            teste {{ products }}
        </div>
    </AppLayout>
</template>