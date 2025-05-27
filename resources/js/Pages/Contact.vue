<!-- Contact page of website -->
<template>
    <AppLayout title="Contact Us">
        <div class="max-w-md mx-auto mt-24 rounded-md overflow-hidden p-6 text-center">
            <h2 class="text-2xl font-semibold mb-8">Contact Us</h2>
            
            <!-- Contact details section -->
            <div class="space-y-6">
                <!-- Email contact -->
                <div class="flex items-center justify-center space-x-3 p-4 bg-gray-50 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-blue-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z" />
                    </svg>
                    <a href="mailto:support@tynesidecommunitystore.co.uk" class="text-gray-700 hover:text-blue-600 transition-colors">
                        support@tynesidecommunitystore.co.uk
                    </a>
                </div>
                
                <!-- Phone contact -->
                <div class="flex items-center justify-center space-x-3 p-4 bg-gray-50 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                        stroke="currentColor" class="w-6 h-6 text-blue-600">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                    <a href="tel:01912224444" class="text-gray-700 hover:text-blue-600 transition-colors">
                        0191 222 4444
                    </a>
                </div>
                
                <!-- Address -->
                <div class="flex items-center justify-center space-x-3 p-4 bg-gray-50 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                        stroke="currentColor" class="w-6 h-6 text-blue-600">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <div class="text-gray-700">
                        <p>Tyneside Community Store</p>
                        <p>123 High Street</p>
                        <p>Newcastle upon Tyne</p>
                        <p>NE1 1AA</p>
                    </div>
                </div>
                
                <!-- Opening hours -->
                <div class="flex items-center justify-center space-x-3 p-4 bg-gray-50 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                        stroke="currentColor" class="w-6 h-6 text-blue-600">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="text-gray-700">
                        <p class="font-medium">Opening Hours:</p>
                        <p>Monday - Friday: 9am - 5pm</p>
                        <p>Saturday: 10am - 4pm</p>
                        <p>Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<!-- Some example content a customer might ask -->
<!-- 
Hi, 

This is a test message.
I was wondering if you could help me with a query I have.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero?

What time are you open until on a Saturday?

Many Thanks
John Smith -->