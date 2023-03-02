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
            
            <h1 class="text-2xl">{{ data.data.statusCode }} {{ data.data.statusMessage  }}</h1>
            <p>{{ data.data.message  }}</p>
            <div class="bg-black text-white p-5 my-5 rounded" v-if="data.data.statusCode == 500" v-html="data.data.stack"></div>

        </div>
        
        <FooterSmall />

    </div>
</template>