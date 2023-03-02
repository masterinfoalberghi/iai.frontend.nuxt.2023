<script setup>
    const date = new Date();
</script>
<template>
    <footer class="border-t border-gray-300 bg-gradient-to-b from-gray-100 bg-white">
        <div class="w-full">
            <p class="text-sm text-center my-6 py-2 text-gray-400">
                &copy; {{ date.getFullYear() }}
            </p>
        </div>
    </footer>
</template>
 