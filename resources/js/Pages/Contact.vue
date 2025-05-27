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
        
        <!-- Social media section -->
        <div class="py-16 bg-gray-50 relative overflow-hidden">
            <div class="container mx-auto px-4 relative">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Connect With Us</h2>
                    <div class="w-24 h-1 bg-brand mx-auto mb-6"></div>
                </div>
                
                <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-md overflow-hidden p-8 text-center">
                    <p class="text-gray-600 mb-8">Follow us on social media to stay updated with our latest news, events, and donation needs.</p>
                    
                    <div class="flex justify-center space-x-6">
                        <!-- Facebook -->
                        <a href="#" class="bg-brand/10 p-4 rounded-full hover:bg-brand/20 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-brand" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                            </svg>
                        </a>
                        
                        <!-- Twitter/X -->
                        <a href="#" class="bg-brand/10 p-4 rounded-full hover:bg-brand/20 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-brand" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        
                        <!-- Instagram -->
                        <a href="#" class="bg-brand/10 p-4 rounded-full hover:bg-brand/20 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-brand" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
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