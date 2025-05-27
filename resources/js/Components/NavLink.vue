<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'inline-flex items-center px-3 h-full border-b-2 border-white font-medium leading-5 text-white focus:outline-none focus:border-white transition duration-150 ease-in-out pb-0'
        : 'inline-flex items-center px-3 h-full border-b-2 border-transparent font-medium leading-5 text-white hover:text-white hover:border-white/50 focus:outline-none focus:text-white focus:border-white/50 transition duration-150 ease-in-out pb-0';
});
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
