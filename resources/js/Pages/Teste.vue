<script setup>
import { ref } from 'vue';

const activeTab = ref(1);

const frutas = ref(["maçã", "banana", "laranja", "manga", "uva"]);

const proximaFruta = () => {
    const primeiraFruta = frutas.value.shift();
    frutas.value.push(primeiraFruta);
};
</script>

<template>
    <div class="relative sm:flex flex-col sm:justify-center sm:items-center min-h-screen bg-gradient-to-br from-deepblue via-spacepurple to-darkspace">
       <!-- <div>frutas: {{ frutas }}</div> --> <h1>teste 2</h1>
        <div>
            fruta atual: {{ frutas[0] }}
        </div>
        <div>
            <button  class="m-4 py-2 px-4 border rounded-full" @click="proximaFruta">Alterar</button>
        </div>
        <div class="border-t-4 flex flex-col justify-center items-center"> <h1>teste 1</h1>
            <div class="m-2">
                <button class="m-4 py-2 px-4 border rounded-full" @click="activeTab = 1">MASCULINO</button>
                <button class="m-4 py-2 px-4 border rounded-full" @click="activeTab = 2">FEMININO</button>
                <button class="m-4 py-2 px-4 border rounded-full" @click="activeTab = 3">INFANTIL</button>
                <button class="m-4 py-2 px-4 border rounded-full" @click="activeTab = 4">PLUS SIZE</button>
            </div>
            <div>
                <div v-if="activeTab === 1">MASCULINO</div>
                <div v-if="activeTab === 2">FEMININO</div>
                <div v-if="activeTab === 3">INFANTIL</div>
                <div v-if="activeTab === 4">PLUS SIZE</div>
            </div>
        </div>
    </div>
</template>