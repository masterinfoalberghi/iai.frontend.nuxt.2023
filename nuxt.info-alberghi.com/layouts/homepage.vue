<script setup>

    const data = defineProps(["data", "locale"]);

    /** SEO */
    useHead({
      charset: () => 'utf-16',
      viewport: () => 'width=500, initial-scale=1',
      title: () => data.data?.slug.metatag.seo.title, // parseStringByLang(JSON.parse(result.value.metatag).seo.title, locale),
      description: () => data.data?.slug.metatag.seo.description, // parseStringByLang(JSON.parse(result.value.metatag).seo.description, locale)
    })

</script>

<template>
    <div>
        <Topbar />
        <Navbar />

        <div class="container mx-auto py-16" >
            
            <h1 class="text-2xl">{{ data.data.slug.metatag.page.title }}</h1>
            <p>{{ data.data.slug.metatag.page.description }}</p>
            {{ data }}
        </div>

        <Footer />
    </div>
</template>