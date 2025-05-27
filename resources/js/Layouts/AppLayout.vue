<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <div class="overflow-x-hidden">

        <Head :title="title" />

        <Banner />

        <div class="flex flex-col justify-between min-h-screen bg-gray-50">
            <div>
                <nav class="bg-brand text-white border-b border-brand-dark">
                    <!-- Primary Navigation Menu -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between h-20">
                            <!-- Logo and Title (Left) -->
                            <div class="shrink-0 flex items-end">
                                <Link :href="route('welcome')" class="flex items-end h-16 self-end">
                                    <ApplicationMark class="block" />
                                    <p class="text-xl ml-4 font-bold text-white hidden md:block self-center">Tyneside Community Store</p>
                                </Link>
                            </div>

                            <!-- Navigation Links (Right) -->
                            <div class="hidden sm:flex items-end justify-end space-x-8 h-full"> 
                                <NavLink :href="route('welcome')" :active="route().current('welcome')">
                                    Home
                                </NavLink>
                                <NavLink :href="route('about')" :active="route().current('about')">
                                    About Us
                                </NavLink>
                                <NavLink :href="route('contact')" :active="route().current('contact')">
                                    Contact Us
                                </NavLink>
                            </div>
                            <!-- 
                            <div class="hidden sm:flex sm:items-center sm:ms-6" v-if="$page.props.auth.user">
                                Settings Dropdown
                                <div class="ms-3 relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <button v-if="$page.props.jetstream.managesProfilePhotos"
                                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-8 w-8 rounded-full object-cover"
                                                    :src="$page.props.auth.user.profile_photo_url"
                                                    :alt="$page.props.auth.user.name">
                                            </button>

                                            <span v-else class="inline-flex rounded-md">
                                                <button type="button"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                    {{ $page.props.auth.user.name }}

                                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            Account Management
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                Manage Account
                                            </div>

                                            <DropdownLink :href="route('profile.show')">
                                                Profile
                                            </DropdownLink>

                                            <div class="border-t border-gray-200" />

                                            Authentication
                                            <form @submit.prevent="logout">
                                                <DropdownLink as="button">
                                                    Log Out
                                                </DropdownLink>
                                            </form>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>
                            <div v-else class="hidden sm:flex sm:items-center sm:ms-6">
                                <NavLink :href="route('login')" :active="route().current('login')">
                                    Admin Login
                                </NavLink>
                            </div> -->

                            <!-- Hamburger -->
                            <div class="-me-2 flex items-center sm:hidden">
                                <button
                                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                                    @click="showingNavigationDropdown = !showingNavigationDropdown">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path
                                            :class="{ 'hidden': showingNavigationDropdown, 'inline-flex': !showingNavigationDropdown }"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                        <path
                                            :class="{ 'hidden': !showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Responsive Navigation Menu -->
                    <div :class="{ 'block': showingNavigationDropdown, 'hidden': !showingNavigationDropdown }"
                        class="sm:hidden">
                        <div class="pt-2 pb-3 space-y-1">
                            <ResponsiveNavLink :href="route('welcome')" :active="route().current('welcome')">
                                Home
                            </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('about')" :active="route().current('about')">
                                About Us
                            </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('contact')" :active="route().current('contact')">
                                Contact Us
                            </ResponsiveNavLink>
                        </div>


                        <!-- Responsive Settings Options
                        <div v-if="$page.props.auth.user" class="pt-4 pb-1 border-t border-gray-200">
                            <div class="flex items-center px-4">
                                <div v-if="$page.props.jetstream.managesProfilePhotos" class="shrink-0 me-3">
                                    <img class="h-10 w-10 rounded-full object-cover"
                                        :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
                                </div>

                                <div>
                                    <div class="font-medium text-base text-gray-800">
                                        {{ $page.props.auth.user.name }}
                                    </div>
                                    <div class="font-medium text-sm text-gray-500">
                                        {{ $page.props.auth.user.email }}
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 space-y-1">
                                <ResponsiveNavLink :href="route('profile.show')" :active="route().current('profile.show')">
                                    Profile
                                </ResponsiveNavLink>

                                Authentication
                                <form method="POST" @submit.prevent="logout">
                                    <ResponsiveNavLink as="button">
                                        Log Out
                                    </ResponsiveNavLink>
                                </form>
                            </div>
                        </div>
                        admin login
                        <div v-else class="pt-4 pb-4 pl-3 border-t border-gray-200">
                            <NavLink :href="route('login')" :active="route().current('login')">
                                Admin Login
                            </NavLink>
                        </div>
                    -->
                    </div>
                </nav>

                <!-- Page Heading -->
                <header v-if="$slots.header" class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <slot name="header" />
                    </div>
                </header>

                <!-- Page Content -->
                <main>
                    <slot />
                </main>
            </div>

            <!-- Page Footer -->
            <footer class="bg-brand text-white border-t border-brand-dark mt-auto">
                <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                    <nav class="flex flex-col justify-between space-y-4 md:space-y-0 text-sm">
                        <div>
                            <NavLink :href="route('welcome')" :active="route().current('welcome')">
                                Home
                            </NavLink>
                        </div>
                        <div>
                            <NavLink :href="route('about')" :active="route().current('about')">
                                About Us
                            </NavLink>
                        </div>
                        <div>
                            <NavLink :href="route('contact')" :active="route().current('contact')">
                                Contact Us
                            </NavLink>
                        </div>
                        <div>
                            <p class="text-gray-500 mx-auto text-center">&copy; {{ new Date().getFullYear() }}
                                Tyneside Community Store. All rights
                                reserved. Site By <a class="hover:text-blue-600"
                                    href="https://www.linkedin.com/in/robert-watkin-8bb61515a/">Robert
                                    W</a></p>
                        </div>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</template>
