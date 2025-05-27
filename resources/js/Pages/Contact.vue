<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <AppLayout title="Contact Us" class="overflow-x-hidden">
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
                    Contact Us
                </h1>
                <p class="text-lg md:text-xl text-white mb-8 max-w-2xl">
                    We're here to help and answer any questions you might have
                </p>
            </div>
        </div>

        <!-- Contact details section -->
        <div class="py-20 bg-white relative">
            <!-- Decorative elements -->
            <div class="absolute left-0 top-10 w-32 h-32 bg-brand/5 rounded-full -ml-16"></div>
            <div class="absolute right-0 bottom-10 w-40 h-40 bg-brand/5 rounded-full -mr-20"></div>
            
            <div class="container mx-auto px-4 relative">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Get In Touch</h2>
                    <div class="w-24 h-1 bg-brand mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto">Have a question or want to learn more about our services? Reach out to us using any of the methods below.</p>
                </div>
                
                <div class="max-w-5xl mx-auto">
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Contact info card -->
                        <div class="bg-white p-8 rounded-xl shadow-xl overflow-hidden transform transition-all hover:shadow-2xl duration-300">
                            <h3 class="text-2xl font-semibold text-gray-900 mb-6 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Contact Information
                            </h3>
                            
                            <div class="space-y-6">
                                <!-- Email -->
                                <div class="flex items-start space-x-4">
                                    <div class="bg-brand/10 p-2 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-medium text-gray-900">Email</h4>
                                        <a href="mailto:support@tynesidecommunitystore.co.uk" class="text-gray-600 hover:text-brand transition-colors">
                                            support@tynesidecommunitystore.co.uk
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- Phone -->
                                <div class="flex items-start space-x-4">
                                    <div class="bg-brand/10 p-2 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-medium text-gray-900">Phone</h4>
                                        <a href="tel:01912224444" class="text-gray-600 hover:text-brand transition-colors">
                                            0191 222 4444
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- Address -->
                                <div class="flex items-start space-x-4">
                                    <div class="bg-brand/10 p-2 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-medium text-gray-900">Address</h4>
                                        <div class="text-gray-600">
                                            <p>Tyneside Community Store</p>
                                            <p>123 High Street</p>
                                            <p>Newcastle upon Tyne</p>
                                            <p>NE1 1AA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Opening hours and map card -->
                        <div class="bg-white p-8 rounded-xl shadow-xl overflow-hidden transform transition-all hover:shadow-2xl duration-300">
                            <h3 class="text-2xl font-semibold text-gray-900 mb-6 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Opening Hours
                            </h3>
                            
                            <div class="bg-gray-50 p-6 rounded-lg mb-6 border-l-4 border-brand">
                                <div class="text-gray-700 space-y-3">
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
                            
                            <!-- Small map or image -->
                            <div class="rounded-lg overflow-hidden h-48 bg-gray-200">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2289.8286938669687!2d-1.6179612230321212!3d54.98969847763006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487e70c8d5c9b8a1%3A0xd8bea7b8a0d7a15a!2sNewcastle%20upon%20Tyne!5e0!3m2!1sen!2suk!4v1684933512266!5m2!1sen!2suk"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Connect With Us section -->
        <div class="py-20 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="absolute left-0 bottom-10 w-32 h-32 bg-brand/5 rounded-full -ml-16"></div>
            <div class="absolute right-0 top-20 w-40 h-40 bg-brand/5 rounded-full -mr-20"></div>
            
            <div class="container mx-auto px-4 relative">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Connect With Us</h2>
                    <div class="w-24 h-1 bg-brand mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto">Follow us on Facebook to stay updated with our latest news, events, and donation needs.</p>
                </div>
                
                <div class="flex justify-center">
                    <div class="w-full max-w-3xl bg-white rounded-xl shadow-xl overflow-hidden transform transition-all hover:shadow-2xl duration-300">
                        <div class="md:flex md:h-[500px] h-[900px]">
                            <!-- Facebook Link -->
                            <div class="md:w-1/3 bg-gradient-to-br from-brand to-brand-dark text-white flex flex-col justify-center relative overflow-hidden">
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
                                
                                <div class="relative text-center px-8 py-12">
                                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-white/10 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                        </svg>
                                    </div>
                                    
                                    <h3 class="text-2xl font-bold mb-4">Follow Our Page</h3>
                                    
                                    <p class="mb-8 opacity-90">Get the latest updates, events, and ways to support our community.</p>
                                    
                                    <a href="https://www.facebook.com/northeastcommunitystores/" target="_blank" rel="noopener noreferrer" class="inline-block px-6 py-3 bg-white text-brand font-semibold rounded-md shadow-lg hover:bg-gray-100 transition-all duration-300 hover:scale-105">
                                        Visit Facebook Page
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Facebook Feed Embed -->
                            <div class="md:w-2/3 h-full flex items-center justify-center">
                                <div class="w-full h-full">
                                    <iframe 
                                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fnortheastcommunitystores%2F&tabs=timeline&width=500&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId" 
                                        width="100%" 
                                        height="100%" 
                                        style="border:none;overflow:hidden;display:block" 
                                        scrolling="no" 
                                        frameborder="0" 
                                        allowfullscreen="true" 
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<!-- Some example content a customer might ask -->
<!-- 
Hi, 

This is a test message.
I was wondering if you could help me with a query I have.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero?

What time are you open until on a Saturday?

Many Thanks
John Smith -->