<template>
    <div class="min-h-screen grid grid-cols-5 sm:justify-center items-center pt-6 sm:pt-0 bg-transparent" style="background-image: url('photos/background.png');">
        <div>
            <slot name="logo" />
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
