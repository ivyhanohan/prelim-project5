<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    categories: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <div class="container mx-auto py-6 min-h-screen w-full flex flex-col items-center bg-gray-100">
        <div v-if="categories.length === 0" class="text-gray-700 text-xl">
            <p>No categories found.</p>
        </div>

        <div v-else class="w-full max-w-4xl bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-6xl text-center text-gray-800 mb-6">Categories</h1>

            <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">Name</th>
                        <th class="py-3 px-4 text-left">Description</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-300">
                    <tr v-for="category in categories" :key="category.id" class="hover:bg-gray-100 transition">
                        <td class="py-3 px-4">{{ category.name }}</td>
                        <td class="py-3 px-4">{{ category.description }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="flex justify-center mt-6">
                <Link
                    href="/products"
                    class="px-4 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg transition"
                >
                    Go to Products
                </Link>
            </div>
        </div>
    </div>
</template>
