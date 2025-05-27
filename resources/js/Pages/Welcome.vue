<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
</script>

<!-- Home page of website -->
<template>
    <AppLayout title="Welcome" class="overflow-x-hidden">
        <!-- Hero section with overlay and content -->
        <div class="relative overflow-hidden">
            <!-- Background image with overlay -->
            <div class="absolute inset-0 bg-welcome-hero bg-cover bg-center">
                <div class="absolute inset-0 bg-gray-900/80"></div>
            </div>
            
            <!-- Hero content -->
            <div class="relative container mx-auto px-4 py-28 md:py-40 flex flex-col items-center justify-center text-center">
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 max-w-4xl drop-shadow-md">
                    Supporting Our Community With Affordable Essentials
                </h1>
                <p class="text-lg md:text-xl text-white mb-8 max-w-2xl">
                    A not-for-profit organisation providing affordable food and household items to the Tyneside community.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <Link :href="route('about')" class="px-6 py-3 bg-white text-brand font-semibold rounded-md shadow-lg hover:bg-gray-100 transition-all duration-300 hover:scale-105">
                        Learn More
                    </Link>
                    <Link :href="route('contact')" class="px-6 py-3 bg-brand-light text-white font-semibold rounded-md shadow-lg hover:bg-brand-dark transition-all duration-300 hover:scale-105 border border-white/30">
                        Contact Us
                    </Link>
                </div>
            </div>
        </div>

        <!-- Mission section with card design -->
        <div class="py-20 bg-white relative">
            <!-- Decorative elements -->
            <div class="absolute left-0 top-10 w-32 h-32 bg-brand/5 rounded-full -ml-16"></div>
            <div class="absolute right-0 bottom-10 w-40 h-40 bg-brand/5 rounded-full -mr-20"></div>
            
            <div class="container mx-auto px-4 relative">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Mission</h2>
                    <div class="w-24 h-1 bg-brand mx-auto mb-6"></div>
                </div>
                
                <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-xl overflow-hidden transform transition-all hover:shadow-2xl duration-300">
                    <div class="md:flex">
                        <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                            <div class="flex items-center mb-6">
                                <div class="w-12 h-12 flex-shrink-0 rounded-full bg-brand/10 flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-semibold text-gray-900">Community-Driven Support</h3>
                            </div>
                            <p class="text-gray-700 mb-6 leading-relaxed">
                                Tyneside Community Store C.I.C. is a not-for-profit organisation that aims to provide affordable
                                food and household items to the local community. We are a community store, run by the community,
                                for the community.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                We also harbour the region's biggest baby bank accessible by referral only. Please contact us to
                                benefit from this service.
                            </p>
                            
                            <!-- Small decorative illustration -->
                            <div class="mt-8 opacity-75">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="30" viewBox="0 0 120 30" fill="none" class="text-brand/20">
                                    <path d="M15 5C8.92487 5 4 9.92487 4 16C4 22.0751 8.92487 27 15 27C21.0751 27 26 22.0751 26 16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M60 5C53.9249 5 49 9.92487 49 16C49 22.0751 53.9249 27 60 27C66.0751 27 71 22.0751 71 16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M105 5C98.9249 5 94 9.92487 94 16C94 22.0751 98.9249 27 105 27C111.075 27 116 22.0751 116 16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="md:w-1/2 bg-gradient-to-br from-brand to-brand-dark p-8 md:p-12 text-white flex flex-col justify-center relative overflow-hidden">
                            <!-- Background pattern -->
                            <div class="absolute inset-0 opacity-10">
                                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <pattern id="smallGrid" width="10" height="10" patternUnits="userSpaceOnUse">
                                            <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
                                        </pattern>
                                    </defs>
                                    <rect width="100%" height="100%" fill="url(#smallGrid)" />
                                </svg>
                            </div>
                            
                            <div class="relative">
                                <h3 class="text-2xl font-semibold mb-6 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                    How We Help
                                </h3>
                                <ul class="space-y-4">
                                    <li class="flex items-start transform transition-transform hover:translate-x-1">
                                        <div class="bg-white/20 rounded-full p-1 mr-3 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <span>Affordable food and household essentials</span>
                                    </li>
                                    <li class="flex items-start transform transition-transform hover:translate-x-1">
                                        <div class="bg-white/20 rounded-full p-1 mr-3 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <span>Baby bank services by referral</span>
                                    </li>
                                    <li class="flex items-start transform transition-transform hover:translate-x-1">
                                        <div class="bg-white/20 rounded-full p-1 mr-3 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <span>Community support and resources</span>
                                    </li>
                                    <li class="flex items-start transform transition-transform hover:translate-x-1">
                                        <div class="bg-white/20 rounded-full p-1 mr-3 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <span>Volunteer opportunities</span>
                                    </li>
                                </ul>
                                <div class="mt-8">
                                    <Link :href="route('contact')" class="inline-flex items-center text-white font-medium bg-white/20 hover:bg-white/30 px-4 py-2 rounded-md transition-all duration-300">
                                        Get in touch
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us section with image -->
        <div class="py-20 bg-gray-50 relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="absolute -left-16 -bottom-16 w-64 h-64 bg-brand/5 rounded-full"></div>
            <div class="absolute -right-20 top-20 w-80 h-80 bg-brand/5 rounded-full"></div>
            
            <div class="container mx-auto px-4 relative">
                <div class="max-w-5xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">About Us</h2>
                        <div class="w-24 h-1 bg-brand mx-auto mb-6"></div>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-xl overflow-hidden transform transition-all hover:shadow-2xl duration-300">
                        <div class="md:flex">
                            <!-- Image side -->
                            <div class="md:w-2/5 bg-brand relative hidden md:block">
                                <!-- Decorative pattern overlay -->
                                <div class="absolute inset-0 opacity-20 mix-blend-overlay">
                                    <svg width="100%" height="100%">
                                        <pattern id="diagonalHatch" width="10" height="10" patternTransform="rotate(45 0 0)" patternUnits="userSpaceOnUse">
                                            <line x1="0" y1="0" x2="0" y2="10" style="stroke:white; stroke-width:1" />
                                        </pattern>
                                        <rect width="100%" height="100%" fill="url(#diagonalHatch)" />
                                    </svg>
                                </div>
                                
                                <!-- About us illustration -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <svg width="160" height="160" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-white">
                                        <path d="M17 20H22V18C22 16.3431 20.6569 15 19 15C18.0444 15 17.1931 15.4468 16.6438 16.1429M17 20H7M17 20V18C17 17.3438 16.8736 16.717 16.6438 16.1429M7 20H2V18C2 16.3431 3.34315 15 5 15C5.95561 15 6.80686 15.4468 7.35625 16.1429M7 20V18C7 17.3438 7.12642 16.717 7.35625 16.1429M7.35625 16.1429C8.0935 14.301 9.89482 13 12 13C14.1052 13 15.9065 14.301 16.6438 16.1429M15 7C15 8.65685 13.6569 10 12 10C10.3431 10 9 8.65685 9 7C9 5.34315 10.3431 4 12 4C13.6569 4 15 5.34315 15 7ZM21 10C21 11.1046 20.1046 12 19 12C17.8954 12 17 11.1046 17 10C17 8.89543 17.8954 8 19 8C20.1046 8 21 8.89543 21 10ZM7 10C7 11.1046 6.10457 12 5 12C3.89543 12 3 11.1046 3 10C3 8.89543 3.89543 8 5 8C6.10457 8 7 8.89543 7 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            
                            <!-- Content side -->
                            <div class="md:w-3/5 p-8 md:p-12">
                                <div class="flex items-center mb-6">
                                    <div class="w-12 h-12 flex-shrink-0 rounded-full bg-brand/10 flex items-center justify-center mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-semibold text-gray-900">Our Story</h3>
                                </div>
                                
                                <p class="text-gray-700 mb-6 leading-relaxed text-lg">
                                    Established in December 2023 by Co-Founders who shared a commitment to supporting families
                                    in and around Tyneside, Tyneside Community Store C.I.C. has rapidly expanded with the help of dedicated
                                    Directors, volunteers, and a supportive community.
                                </p>
                                
                                <div class="flex justify-between items-center mt-8 pt-6 border-t border-gray-100">
                                    <!-- Stats -->
                                    <div class="grid grid-cols-2 gap-4 md:gap-8 pr-4">
                                        <div>
                                            <p class="text-brand text-2xl font-bold">2023</p>
                                            <p class="text-gray-500 text-sm">Founded</p>
                                        </div>
                                        <div>
                                            <p class="text-brand text-2xl font-bold">100+</p>
                                            <p class="text-gray-500 text-sm">Families Helped</p>
                                        </div>
                                    </div>
                                    
                                    <!-- CTA -->
                                    <Link :href="route('about')" class="px-6 py-3 bg-brand text-white font-semibold rounded-md shadow-md hover:bg-brand-dark transition-all duration-300 inline-flex items-center hover:scale-105">
                                        Read More
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Find Us section with map and info cards -->
        <div class="py-20 bg-white relative overflow-hidden">
            <!-- Background decorative elements (contained within viewport) -->
            <div class="absolute left-0 bottom-10 w-32 h-32 rounded-full bg-brand/5 opacity-75"></div>
            <div class="absolute right-0 top-20 w-32 h-32 rounded-full bg-brand/5 opacity-75"></div>
            
            <div class="container mx-auto px-4 relative">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Find Us</h2>
                    <div class="w-24 h-1 bg-brand mx-auto mb-8"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto mb-10">We're conveniently located in Wallsend, with easy access to public transportation and nearby parking.</p>
                </div>
                
                <div class="max-w-6xl mx-auto">
                    <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                        <div class="md:flex">
                            <!-- Map -->
                            <div class="md:w-2/3">
                                <div class="h-full min-h-[400px] w-full">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1072.4935107000597!2d-1.5372945072447541!3d54.9905926615189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487e7035d1d0f16b%3A0x34286027e3ba564e!2s73-75%20High%20St%20W%2C%20Wallsend%20NE28%208JD!5e0!3m2!1sen!2suk!4v1703969818369!5m2!1sen!2suk"
                                        class="w-full h-full border-0" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            
                            <!-- Info cards -->
                            <div class="md:w-1/3 p-6 bg-gradient-to-br from-gray-50 to-white">
                                <div class="h-full flex flex-col justify-between space-y-6">
                                    <!-- Address card -->
                                    <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-brand transform transition-transform duration-300 hover:scale-[1.02] hover:shadow-lg">
                                        <h3 class="text-xl font-semibold text-gray-900 mb-3 flex items-center">
                                            <div class="bg-brand/10 p-2 rounded-full mr-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                            </div>
                                            Our Address
                                        </h3>
                                        <p class="text-gray-700 leading-relaxed pl-11">
                                            73-75 High Street West<br />
                                            Wallsend<br />
                                            NE28 8JD
                                        </p>
                                    </div>
                                    
                                    <!-- Hours card -->
                                    <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-brand transform transition-transform duration-300 hover:scale-[1.02] hover:shadow-lg">
                                        <h3 class="text-xl font-semibold text-gray-900 mb-3 flex items-center">
                                            <div class="bg-brand/10 p-2 rounded-full mr-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            Opening Hours
                                        </h3>
                                        <div class="text-gray-700 space-y-3 pl-11">
                                            <div>
                                                <div class="font-medium text-gray-600">Monday - Friday:</div>
                                                <div class="ml-4">9:30am - 2:30pm</div>
                                            </div>
                                            <div>
                                                <div class="font-medium text-gray-600">Saturday:</div>
                                                <div class="ml-4">9:30am - 11:30am</div>
                                            </div>
                                            <div>
                                                <div class="font-medium text-gray-600">Sunday:</div>
                                                <div class="ml-4">Closed</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Contact card -->
                                    <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-brand transform transition-transform duration-300 hover:scale-[1.02] hover:shadow-lg">
                                        <h3 class="text-xl font-semibold text-gray-900 mb-3 flex items-center">
                                            <div class="bg-brand/10 p-2 rounded-full mr-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            Get In Touch
                                        </h3>
                                        <p class="text-gray-700 mb-4 pl-11">
                                            Have questions or want to learn more about our services?
                                        </p>
                                        <div class="pl-11">
                                            <Link :href="route('contact')" class="inline-flex items-center px-4 py-2 bg-brand text-white font-medium rounded-md hover:bg-brand-dark transition-all duration-300 hover:scale-105 shadow-md">
                                                Contact Us
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                </svg>
                                            </Link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Additional information -->
                    <div class="mt-10 text-center">
                        <div class="inline-flex items-center justify-center bg-brand/10 text-brand px-4 py-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="font-medium">Public transportation: Metro stations and bus stops nearby</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

