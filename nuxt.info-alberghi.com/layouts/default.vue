<script setup>

    const props = defineProps(["data", "locale"]);

    /** SEO */
    useHead({
      charset: () => 'utf-16',
      viewport: () => 'width=500, initial-scale=1',
      title: () => props.data?.slug.metatag.seo.title, // parseStringByLang(JSON.parse(result.value.metatag).seo.title, locale),
      description: () => props.data?.slug.metatag.seo.description, // parseStringByLang(JSON.parse(result.value.metatag).seo.description, locale)
    })

</script>

<template>
    <div>
        <Topbar />
        <Navbar />
        <div class="container mx-auto py-16" >
             <slot />
        </div>
        <!-- <Footer /> -->

    </div>
</template>