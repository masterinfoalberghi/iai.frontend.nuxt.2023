<script setup>
    const date = new Date();
    const props = defineProps({
        error: Object
    })
    const handleError = () => clearError({ redirect: '/' })
</script>

<template>
    <div class="bg-gray-600 h-[72px] m-0 p-0">
        <div class="container mx-auto mb-0">
            <div class="flex">
                <div class="flex-none w-1/4 grid h-[72px]">
                    <a href="#">
                        <img src="/images/logo-iai.png" class="py-[19px]">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto py-16" >
        <h1 class="text-6xl text-red-500">
            {{  error.statusCode }}
        </h1>
        <b class="block" v-if="error.message" v-html="error.message"></b>
        <div v-if="error.stack != ''">
            <div  class="my-3 p-3 rounded bg-gray-100" v-html="error.stack"></div>
        </div>
        <a href="#" class="pt-10 block" @onclick="handleError">Back to homepage</A>
    </div>
 
    <footer class="border-t border-gray-300 bg-gradient-to-b from-gray-100 bg-white">
        <div class="w-full">
            <p class="text-sm text-center my-6 py-2 text-gray-400">
                &copy; {{ date.getFullYear() }} Info Alberghi Srl
            </p>
        </div>
    </footer>

</template>