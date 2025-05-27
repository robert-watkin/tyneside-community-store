<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <AppLayout title="About Us" class="overflow-x-hidden">
        <!-- Hero section with overlay and content -->
        <div class="relative overflow-hidden">
            <!-- Background image with overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-brand to-brand-dark">
                <div class="absolute inset-0 opacity-10">
                    <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                                <path d="M 0 10 L 40 10 M 10 0 L 10 40" fill="none" stroke="white" stroke-width="1"/>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#grid)" />
                    </svg>
                </div>
            </div>
            
            <!-- Hero content -->
            <div class="relative container mx-auto px-4 py-20 md:py-28 flex flex-col items-center justify-center text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 max-w-4xl drop-shadow-md">
                    About Tyneside Community Store
                </h1>
                <p class="text-lg md:text-xl text-white mb-8 max-w-2xl">
                    Supporting families in Tyneside with essential items since 2023
                </p>
            </div>
        </div>

        <!-- About Us section with card design -->
        <div class="py-20 bg-white relative">
            <!-- Decorative elements -->
            <div class="absolute left-0 top-10 w-32 h-32 bg-brand/5 rounded-full -ml-16"></div>
            <div class="absolute right-0 bottom-10 w-40 h-40 bg-brand/5 rounded-full -mr-20"></div>
            
            <div class="container mx-auto px-4 relative">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Story</h2>
                    <div class="w-24 h-1 bg-brand mx-auto mb-6"></div>
                </div>
                
                <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-xl overflow-hidden transform transition-all hover:shadow-2xl duration-300">
                    <div class="md:flex">
                        <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                            <p class="text-gray-600 mb-4">
                                Established in December 2023 by Co-Founders who shared a commitment to supporting families in
                                and around Tyneside, Tyneside Community Store C.I.C. has rapidly expanded with the help of
                                dedicated Directors, volunteers, and a supportive community.
                            </p>
                            <p class="text-gray-600 mb-4">
                                Operating on a referral and walk-in basis to our community shop in Wallsend, we receive
                                referrals from professionals directly assisting families. Actively seeking donations of
                                pre-loved items, we not only address immediate needs but also contribute to reducing landfill
                                waste and fostering sustainability.
                            </p>
                            <p class="text-gray-600">
                                Additionally, we run a successful volunteer program for the local community and offer placement opportunities for colleges, universities, and businesses.
                            </p>
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
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Our Impact
                                </h3>
                                <div class="space-y-4">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mr-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-medium">Thousands of families supported</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mr-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-medium">Safe places to sleep for children</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mr-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-medium">Essential items provided</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our mission section -->
        <div class="py-20 bg-gray-50 relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="absolute -left-16 -bottom-16 w-64 h-64 bg-brand/5 rounded-full"></div>
            <div class="absolute -right-20 top-20 w-80 h-80 bg-brand/5 rounded-full"></div>
            
            <div class="container mx-auto px-4 relative">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Mission</h2>
                    <div class="w-24 h-1 bg-brand mx-auto mb-6"></div>
                </div>
                
                <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-xl overflow-hidden transform transition-all hover:shadow-2xl duration-300">
                    <div class="md:flex">
                        <!-- Image side -->
                        <div class="md:w-2/5 bg-brand relative hidden md:block">
                            <!-- Decorative pattern overlay -->
                            <div class="absolute inset-0 opacity-20 mix-blend-overlay">
                                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <pattern id="diagonalHatch" width="10" height="10" patternTransform="rotate(45 0 0)" patternUnits="userSpaceOnUse">
                                            <line x1="0" y1="0" x2="0" y2="10" style="stroke:white; stroke-width:1" />
                                        </pattern>
                                    </defs>
                                    <rect width="100%" height="100%" fill="url(#diagonalHatch)" />
                                </svg>
                            </div>
                            
                            <!-- Mission statement overlay -->
                            <div class="absolute inset-0 flex items-center justify-center p-8">
                                <div class="text-white text-center">
                                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white/10 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2">Supporting Tyneside Families</h3>
                                    <p class="text-sm opacity-80">Every child deserves the essentials for growth and development</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Content side -->
                        <div class="md:w-3/5 p-8 md:p-12">
                            <p class="text-gray-600 mb-6">
                                Our mission is to empower and relieve families in Tyneside and the surrounding areas living in
                                poverty. We do this by supplying essential items, ensuring that every child's basic needs are
                                met from birth. From necessities like nappies and baby formula to safety items such as stair
                                gates, strollers, clothing, and toys, our Community Interest Company (C.I.C.) is committed to
                                providing comprehensive support for families caring for children.
                            </p>
                            <p class="text-gray-600">
                                In collaboration with the local community, we facilitate the donation of pre-loved essentials from one family to another,
                                promoting recycling. Our dedication extends to ensuring school children have free uniforms and
                                proper footwear, contributing to minimising landfill waste and advocating sustainable living
                                practices.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Objectives section -->
        <div class="py-20 bg-white relative overflow-hidden">
            <div class="container mx-auto px-4 relative">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Objectives</h2>
                    <div class="w-24 h-1 bg-brand mx-auto mb-6"></div>
                </div>
                
                <div class="max-w-5xl mx-auto">
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Objective card 1 -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-brand transform transition-transform duration-300 hover:scale-[1.02] hover:shadow-lg">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3 flex items-center">
                                <div class="bg-brand/10 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                Free Essential Items
                            </h3>
                            <p class="text-gray-600 pl-11">
                                Distributing free baby food, nappies, toiletries, toys, and other equipment to those in need via referral partners. Providing free school uniform, children's books, and warm winter clothing for school-aged children.
                            </p>
                        </div>
                        
                        <!-- Objective card 2 -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-brand transform transition-transform duration-300 hover:scale-[1.02] hover:shadow-lg">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3 flex items-center">
                                <div class="bg-brand/10 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                                    </svg>
                                </div>
                                Affordable Store
                            </h3>
                            <p class="text-gray-600 pl-11">
                                Selling all available donated stock at affordable prices to the local community through an accessible store. Offering free clothing, hygiene products, and household items to individuals and families in need.
                            </p>
                        </div>
                        
                        <!-- Objective card 3 -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-brand transform transition-transform duration-300 hover:scale-[1.02] hover:shadow-lg">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3 flex items-center">
                                <div class="bg-brand/10 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                                Community Well-being
                            </h3>
                            <p class="text-gray-600 pl-11">
                                Undertaking and being involved in activities that promote the well-being and welfare of the community. Creating a supportive network for families facing financial hardship.
                            </p>
                        </div>
                        
                        <!-- Objective card 4 -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-brand transform transition-transform duration-300 hover:scale-[1.02] hover:shadow-lg">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3 flex items-center">
                                <div class="bg-brand/10 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                </div>
                                Environmental Impact
                            </h3>
                            <p class="text-gray-600 pl-11">
                                Encouraging the community to recycle preloved items to minimise the environmental impact of unnecessary landfill waste. Creating a sustainable cycle of reuse for children's items.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Community Impact section -->
        <div class="py-20 bg-gray-50 relative overflow-hidden">
            <div class="container mx-auto px-4 relative">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Community Impact</h2>
                    <div class="w-24 h-1 bg-brand mx-auto mb-6"></div>
                </div>
                
                <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-xl overflow-hidden">
                    <div class="p-8 md:p-12">
                        <div class="flex flex-col md:flex-row gap-8 items-center">
                            <div class="md:w-1/3 flex-shrink-0">
                                <div class="bg-gradient-to-br from-brand to-brand-dark rounded-lg p-8 text-white text-center">
                                    <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-white/10 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-bold mb-2">How We Help</h3>
                                    <p>Providing vital goods and services to those who need them most</p>
                                </div>
                            </div>
                            <div class="md:w-2/3">
                                <p class="text-gray-600 mb-6">
                                    The community benefits by having access to basic and vital goods, providing instant
                                    relief of severe deprivation on a local level. We aim to fulfill the demand for products not
                                    otherwise available at food banks and other local supporting services.
                                </p>
                                <p class="text-gray-600">
                                    Our pricing makes the store extremely affordable for even the most impoverished families in the North East. It
                                    offers a wide selection of goods, relieving the financial hardship experienced by many
                                    locally. Additionally, any surplus funds will be utilised to purchase necessary stock to meet
                                    the demand of referrals, such as new cot mattresses, stairgates, and other equipment that is
                                    less often donated.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

