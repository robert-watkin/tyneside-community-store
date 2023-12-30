<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

</script>

<!-- Home page of website -->
<template>
    <AppLayout title="Welcome">
        <!-- full page hero with title inside -->
        <div class="bg-welcome-hero bg-center bg-cover">
            <div class="container mx-auto pb-36 pt-6  md:py-12 md:pb-24">
                <div class="p-4 md:p-16 mb-8 md:mb-0 text-center">
                    <h1 class="text-4xl text-black font-semibold mb-4">Tyneside Community Store</h1>
                    <p class="text-gray-800">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                    </p>
                </div>

            </div>
        </div>

        <!-- About Us Section. Text on left, placeholder image on right. inside container -->
        <div class="container mx-auto pt-12">
            <section class="mb-8">
                <div class="flex flex-col md:flex-row justify between ">
                    <div class="md:pl-16 p-4 md:w-1/2 md:text-right">
                        <h3 class="text-xl font-semibold mb-4">About Us</h3>
                        <p class="text-gray-700">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.
                            Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis
                            sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.
                            Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per
                            conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero.
                        </p>
                    </div>
                    <div class="p-4 md:w-1/2">
                        <img class="h-48 w-full object-cover object-top md:h-auto md:mx-0 md:w-2/3" src="images/store-front.jpg" alt="Store Front Image" />
                    </div>
                </div>
            </section>
        </div>
        <!-- Find Us Section. Google Maps on left, address on right. inside container -->

        <div class="container mx-auto p-4 mb-8">
            <!-- Find Usp -->
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

            <!-- More Sections as Needed -->

        </div>

    </AppLayout>
</template>

