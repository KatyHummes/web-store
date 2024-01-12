<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ref, onMounted } from 'vue';

const category = ref(1);

const props = defineProps({
    products: Array
});

// Função para buscar produtos do backend
const fetchProducts = async () => {
    // Aqui você faria a chamada para o backend para buscar os produtos
    // Por exemplo: const response = await axios.get('/api/products');
    props.products = response.data;
};

onMounted(() => {
    fetchProducts();
});
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
                <div
                    class=" overflow-hidden shadow-xl sm:rounded-lg bg-gradient-to-r from-blue-700 via-violet-700 to-purple-700">

                    <button class="m-4 py-2 px-4 border rounded-full text-white" @click="category = 1">MASCULINO</button>
                    <button class="m-4 py-2 px-4 border rounded-full text-white" @click="category = 2">FEMININO</button>
                    <button class="m-4 py-2 px-4 border rounded-full text-white"
                            @click="category = 3">INFANTIL</button>
                        <button class="m-4 py-2 px-4 border rounded-full text-white"
                            @click="category = 4">SPORT</button>
                        <button class="m-4 py-2 px-4 border rounded-full text-white" 
                        @click="category = 5">PLUS SIZE</button>
                        <button class="m-4 py-2 px-4 border rounded-full text-white"
                            @click="category = 6">SAPATOS</button>
                        <button class="m-4 py-2 px-4 border rounded-full text-white"
                            @click="category = 7">BOLSAS</button>
                        <button class="m-4 py-2 px-4 border rounded-full text-white"
                            @click="category = 8">ACESSÓRIOS</button>
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

                <div>
                    <div v-for="product in products" :key="product.id">
                        <h1>{{ product.name }}</h1>
                        <h2>{{ product.price }}</h2>
                        <div>{{ product.photos }}</div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

