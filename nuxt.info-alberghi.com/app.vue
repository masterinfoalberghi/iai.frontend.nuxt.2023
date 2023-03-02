<script setup>
  
  const statusError = ref({ data: {statusCode: 404, statusMessage: 'Page Not Found' }});
  const route = useRoute();
  const runtimeConfig = useRuntimeConfig()
  const locale = getLangByUrl(route.path)

  /** Routing su DB */
  const { data: result, error, pending } = await useAsyncData(
    'result', () =>  $fetch( 
      `/api/slugs`, {
          method: 'GET',
          baseURL: runtimeConfig.public.apiBase, 
          params: {
            path: route.path,
            locale: locale
          }
      } 
    ), {
      watch: [route]
    }
  );
 
  /** 404 SSR */
  if (error.value ) {
    throw createError({ statusCode: 404, statusMessage: 'Page Not Found', message: "Questa pagina non è stata trovata" })
    
  } else {

    /** SEO */
    useServerSeoMeta({
      charset: 'utf-16',
      viewport: 'width=500, initial-scale=1',
      title: result.value?.slug.metatag.seo.title, // parseStringByLang(JSON.parse(result.value.metatag).seo.title, locale),
      description: result.value?.slug.metatag.seo.description, // parseStringByLang(JSON.parse(result.value.metatag).seo.description, locale)
    })

  }

</script>

<template>
  <div>

    <!--loading -->
    <div class="fixed top-0 right-0 bottom-0 left-0 bg-white bg-opacity-50 p-5" v-if="pending"></div>

    <!-- layout --> 
    
    <NuxtLayout :name="result.slug && result.slug.type ? result.slug.type : 'error'" :data="result" :locale="locale" ></NuxtLayout>

  </div>
</template>