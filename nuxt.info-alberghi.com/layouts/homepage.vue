<script setup>

    const data = defineProps(["data", "locale"]);

</script>

<template>
    <div>
        <h1 class="text-2xl">{{ data.data.slug.metatag.page.title }}</h1>
        <p>{{ data.data.slug.metatag.page.description }}</p>
        {{ data }}
    </div>
</template>