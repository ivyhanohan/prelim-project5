<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    products: {
        type: Array,
        required: true,
    },
    categories: {
        type: Array,
        required: true,
    },
    selectedCategory: {
        type: Object,
        required: false,
    },
});
</script>

<template>
    <div class="flex min-h-screen bg-gray-100 font-inter">
        <!-- Sidebar -->
        <aside class="w-1/5 bg-white shadow-lg px-4 py-6">
            <Link href="/products" class="text-center text-2xl font-bold text-gray-800 mb-4">Categories</Link>
            <nav class="space-y-2">
                <ul>
                    <li
                        v-for="category in categories"
                        :key="category.id"
                        class="mb-2"
                    >
                        <Link
                            :href="'/products/' + category.id"
                            class="block px-4 py-2 rounded-lg transition duration-150 ease-in-out"
                            :class="{
                                'bg-blue-600 text-white': selectedCategory && selectedCategory.id === category.id,
                                'hover:bg-gray-200': !selectedCategory || selectedCategory.id !== category.id
                            }"
                        >
                            {{ category.name }}
                        </Link>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="w-4/5 p-6">
            <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">
                {{ selectedCategory ? selectedCategory.name : "All Products" }}
            </h1>

            <div v-if="products.length > 0" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    v-for="product in products"
                    :key="product.id"
                    class="bg-white shadow-md p-4 rounded-lg hover:shadow-lg transition"
                >
                    <h2 class="text-xl font-semibold text-gray-800">{{ product.name }}</h2>
                    <p class="text-gray-600">Price: ${{ product.whole_sale_price }}</p>
                </div>
            </div>

            <p v-else class="text-center text-gray-600 text-lg mt-4">No products found.</p>
        </main>
    </div>
</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
</style>
