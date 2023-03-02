<script setup>

    const route = useRoute();
    const locale = getLangByUrl(route.path)

    const props = defineProps({
        error: Object
    })
    
    clearError()

</script>

<template>
    <NuxtLayout name="error" :data="error" :locale="locale"></NuxtLayout>
</template>
  