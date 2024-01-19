<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ref, onMounted } from 'vue';
import { Link, useForm } from '@inertiajs/vue3';

const category = ref(1);

const produtos = ref([]);

onMounted(() => {
    fetch('/produtos')
        .then(response => {
            if (!response.ok) {
                throw new Error('Erro ao carregar os produtos');
            }
            return response.json();
        })
        .then(data => {
            produtos.value = data;
        })
        .catch(error => {
            console.error('Erro:', error);
        });
});

const getPhotoUrl = (path) => {
    return path ? `http://localhost:8000/storage/${path}` : 'https://via.placeholder.com/150';
};


</script>

<template>
    <AppLayout title="Dashboard">
      

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden shadow-xl sm:rounded-lg text-white bg-purple-500">

                    <button class="m-4 py-2 px-4 border rounded-full" @click="category = 1">MASCULINO</button>
                    <button class="m-4 py-2 px-4 border rounded-full" @click="category = 2">FEMININO</button>
                    <button class="m-4 py-2 px-4 border rounded-full" @click="category = 3">INFANTIL</button>
                    <button class="m-4 py-2 px-4 border rounded-full" @click="category = 4">SPORT</button>
                    <button class="m-4 py-2 px-4 border rounded-full" @click="category = 5">PLUS SIZE</button>
                    <button class="m-4 py-2 px-4 border rounded-full" @click="category = 6">SAPATOS</button>
                    <button class="m-4 py-2 px-4 border rounded-full" @click="category = 7">BOLSAS</button>
                    <button class="m-4 py-2 px-4 border rounded-full" @click="category = 8">ACESSÓRIOS</button>
                </div>
                <div>
                    <div v-if="category === 1">MASCULINO</div>
                    <div v-if="category === 2">FEMININO</div>
                    <div v-if="category === 3">INFANTIL</div>
                    <div v-if="category === 4">SPORT</div>
                    <div v-if="category === 5">PLUS SIZE</div>
                    <div v-if="category === 6">SAPATOS</div>
                    <div v-if="category === 7">BOLSAS</div>
                    <div v-if="category === 8">ACESSÓRIOS</div>
                </div>
                <div
                    class="bg-white p-4 grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-4 rounded-xl">
                    <div v-for="produto in produtos" :key="produto.id">
                        <Link :href="route('show.product', produto.id)">
                            <img :src="getPhotoUrl(produto.photos[0].photo_path)" alt="Foto do Produto" class="rounded-xl">
                     </Link>
                       <div class="flex justify-around font-serif font-medium">
                        <h1>{{ produto.name }}</h1>
                        <h2 class="text-red-500">{{ produto.price }}</h2>
                       </div>
                    </div>
                </div>
            </div>
        </div>

    </AppLayout>
</template>

