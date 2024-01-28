<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';

</script>

<!-- Home page of website -->
<template>
    <AppLayout title="Welcome">
        <!-- Full-page hero with title inside -->
        <div class="bg-welcome-hero bg-center bg-cover">
            <div class="container mx-auto pb-36 pt-6 md:py-12 md:pb-24">
                <div class="p-4 md:p-16 mb-8 md:mb-0 text-center">
                    <h1 class="text-4xl text-black font-semibold mb-4">Tyneside Community Store</h1>
                </div>
            </div>
        </div>

        <!-- Our mission -->
        <div class="container mx-auto max-w-3xl p-4 mb-8">
            <section>
                <div class="text-center">
                    <div class="">
                        <h3 class="text-xl font-semibold mb-4">Our Mission</h3>
                        <p class="text-gray-700">
                            Tyneside Community Store C.I.C. is a not-for-profit organisation that aims to provide affordable
                            food and household items to the local community. We are a community store, run by the community,
                            for
                            the community.
                        </p>
                    </div>
                </div>
            </section>
        </div>

        <!-- About Us Section. Text on left, placeholder image on right. Inside container
        <div class="container mx-auto pt-12">
            <section class="mb-8">
                <div class="flex flex-col md:flex-row justify-between ">
                    <div class="md:pl-16 p-4 md:w-1/2 md:text-right">
                        <h3 class="text-xl font-semibold mb-4">About Us</h3>
                        <p class="text-gray-700">
                            Established in December 2023 by Co-Founders who shared a commitment to supporting families
                            in and around
                            Tyneside, Tyneside Community Store C.I.C. has rapidly expanded with the help of dedicated
                            Directors,
                            volunteers, and a supportive community.
                        </p>
                        <div class="mt-4">
                            <Link :href="route('about')" class="bg-blue-500 text-white px-4 py-2 rounded-md">Read
                            More</Link>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/2">
                        <img class="h-48 w-full object-cover object-top md:h-auto md:mx-0 md:w-2/3"
                            src="images/store-front.jpg" alt="Store Front Image" />
                    </div>
                </div>

            </section>
        </div> -->


        <div class="container mx-auto max-w-3xl p-4 mb-8 text-center">
            <h3 class="text-xl font-semibold mb-4">About Us</h3>
            <p class="text-gray-700">
                Established in December 2023 by Co-Founders who shared a commitment to supporting families
                in and around
                Tyneside, Tyneside Community Store C.I.C. has rapidly expanded with the help of dedicated
                Directors,
                volunteers, and a supportive community.
            </p>
            <div class="mt-4">
                <Link :href="route('about')" class="bg-blue-500 text-white px-4 py-2 rounded-md">Read
                More</Link>
            </div>
        </div>
        <!-- Find Us Section. Google Maps on left, address on right. Inside container -->
        <div class="container mx-auto p-4 mb-8">
            <!-- Find Us -->
            <section>
                <div class="text-center">
                    <div class="">
                        <h3 class="text-xl font-semibold mb-4">Find Us</h3>
                        <!-- 73-75 High Street West NE28 8JD -->
                        <p class="text-gray-700">
                            73-75 High Street West<br />
                            Wallsend<br />
                            NE28 8JD
                        </p>
                    </div>
                    <!-- Google Maps Embed -->
                    <div class="p-4 mx-auto h-96 md:w-2/3">
                        <!-- Replace this with your Google Maps iframe -->
                        <div class="h-full aspect-w-16 aspect-h-9">
                            <!-- Replace the src attribute with your Google Maps embed code -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1072.4935107000597!2d-1.5372945072447541!3d54.9905926615189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487e7035d1d0f16b%3A0x34286027e3ba564e!2s73-75%20High%20St%20W%2C%20Wallsend%20NE28%208JD!5e0!3m2!1sen!2suk!4v1703969818369!5m2!1sen!2suk"
                                class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </AppLayout>
</template>

