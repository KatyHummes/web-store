<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});


</script>

<template>
    <div class="sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-image" style="background-image: url('photos/background.png');">
        <div v-if="canLogin" class="p-6 border-4 rounded-full bg-gray-700 z-10">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                class="font-semibold text-gray-100 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm">
            Dashboard</Link>
            <template v-else>
                <Link :href="route('login')"
                    class="font-semibold text-gray-100 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm">
                Log in</Link>

                <Link v-if="canRegister" :href="route('register')"
                    class="ms-4 font-semibold text-gray-100 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm">
                Register</Link>
            </template>
        </div>
    </div>

    <div>
        <div style="background-image: url('photos/astronauta.png');" class="z-100">

        </div>
    </div>
</template>