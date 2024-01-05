<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm } from 'laravel-precognition-vue-inertia';

const form = useForm('post', '/criar-produto', {
    name: '',
    email: '',
});


    
const submit = () => form.submit({
    // console.log(form.name, form.price);
    preserveScroll: true,
    onSuccess: () => form.reset(),
});

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-medium font-serif text-2xl text-gray-800 leading-tight">
                Criar Produto
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class=" overflow-hidden shadow-xl sm:rounded-lg flex flex-row bg-gradient-to-r from-blue-700 via-violet-700 to-purple-700">
                    <div class="p-6">
                        <form @submit.prevent="submit">
                            <div>
                                <label class="text-white" for="name">Nome</label>
                                <input type="text" name="name" id="name" v-model="form.name" @change="form.validate('name')"
                                    class="border-none m-4 py-2 px-4 border rounded-full">
                                <div v-if="form.invalid('name')">
                                    {{ form.errors.name }}
                                </div>

                                <label class="text-white" for="price">Preço</label>
                                <input type="text" name="price" id="price" v-model="form.price"
                                    @change="form.validate('price')" class="m-4 py-2 px-4 border rounded-full">
                                <div v-if="form.invalid('price')">
                                    {{ form.errors.price }}
                                </div>

                                <button class="m-4 py-2 px-4 border rounded-full font-bold text-white hover:text-purple-300"
                                    :disabled="form.processing" type="submit">Criar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </AppLayout>
</template>