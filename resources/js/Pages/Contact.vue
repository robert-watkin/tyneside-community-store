<!-- Home page of website -->
<template>
    <AppLayout title="Contact Us">
        <div class="max-w-md mx-auto mt-24 rounded-md overflow-hidden p-6">
            <h2 class="text-2xl font-semibold mb-4">Contact Us</h2>

            <form @submit.prevent="submitForm">
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 text-sm font-medium">Name</label>
                    <input v-model="form.name" type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md"
                        required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-600 text-sm font-medium">Email</label>
                    <input v-model="form.email" type="email" id="email" name="email"
                        class="mt-1 p-2 w-full border rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-gray-600 text-sm font-medium">Message</label>
                    <textarea v-model="form.message" id="message" name="message" rows="4"
                        class="mt-1 p-2 w-full border rounded-md" required></textarea>
                </div>

                <div class="mt-4">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Submit</button>
                </div>

                <div v-if="successMessage" class="mt-4 text-green-600">
                    {{ successMessage }}
                </div>

                <div v-if="errorMessage" class="mt-4 text-red-600">
                    {{ errorMessage }}
                </div>
            </form>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ref } from 'vue';
import { Axios } from 'axios';
import axios from 'axios';

const form = ref({
    name: '',
    email: '',
    message: '',
});

const successMessage = ref('');
const errorMessage = ref('');

const submitForm = async () => {
    console.log("form submitted");

    // submit form using axios
    axios.post('/api/contact', form.value)
        .then(function (response) {
            // handle success
            console.log(response);
            successMessage.value = 'Form submitted successfully!';
            errorMessage.value = '';
            clearForm();
        })
        .catch(function (error) {
            // handle error
            console.log(error);
            successMessage.value = '';
            errorMessage.value = 'Failed to submit form. Please try again.';
        })
        .then(function () {
            // always executed
        });
};

const clearForm = () => {
    form.value.name = '';
    form.value.email = '';
    form.value.message = '';
};
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