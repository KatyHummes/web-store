<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ref } from 'vue';

const category = ref(1);
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-medium font-serif text-2xl text-gray-800 leading-tight">
                Home
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden shadow-xl sm:rounded-lg grig grid-cols-4 bg-gradient-to-r from-blue-700 via-violet-700 to-purple-700">
                    <div>
                        <button class="m-4 py-2 px-4 border rounded-full col-span-1 text-white"
                            @click="category = 1">MASCULINO</button>
                        <button class="m-4 py-2 px-4 border rounded-full col-span-2 text-white"
                            @click="category = 2">FEMININO</button>
                        <!-- <button class="m-4 py-2 px-4 border rounded-full col-span-3 text-white"
                            @click="category = 3">INFANTIL</button>
                        <button class="m-4 py-2 px-4 border rounded-full col-span-4 text-white"
                            @click="category = 4">SPORT</button>
                        <button class="m-4 py-2 px-4 border rounded-full col-span-4 text-white" @click="category = 5">PLUS
                            SIZE</button>
                        <button class="m-4 py-2 px-4 border rounded-full col-span-4 text-white"
                            @click="category = 6">SAPATOS</button>
                        <button class="m-4 py-2 px-4 border rounded-full col-span-4 text-white"
                            @click="category = 7">BOLSAS</button>
                        <button class="m-4 py-2 px-4 border rounded-full col-span-4 text-white"
                            @click="category = 8">ACESSÓRIOS</button> -->
                    </div>
                </div>
                <div>
                    <div v-if="category === 1">MASCULINO</div>
                    <div v-if="category === 2">FEMININO</div>
                    <!-- <div v-if="category === 3">INFANTIL</div>
                    <div v-if="category === 4">SPORT</div>
                    <div v-if="category === 5">PLUS SIZE</div>
                    <div v-if="category === 6">SAPATOS</div>
                    <div v-if="category === 7">BOLSAS</div>
                    <div v-if="category === 8">ACESSÓRIOS</div> -->
                </div>
            </div>
        </div>
    </AppLayout>
</template>

