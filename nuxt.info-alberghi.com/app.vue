<script setup>
  
  const route = useRoute();
  const runtimeConfig = useRuntimeConfig()
  const locale = getLangByUrl(route.path);

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
  if ( !pending.value && error.value ) {

    throw createError({statusCode: 500, message: error.value, stack: ""})
    
  } else if ( !pending.value && !result.value ) {

    throw createError({statusCode: 404, message: "Pagina non trovata", stack: ""})

  } else {

    const locale = useState("locale", () => getLangByUrl(route.path))
    const dictionary = useState("dictionary", () => result.value.dictionary)
    
    /** alleggerisco il data */
    result.value.dictionary = null;

  }
  
</script>

<template>
  <div>

    <!--loading -->
    <div class="fixed top-0 right-0 bottom-0 left-0 bg-white bg-opacity-50 p-5" v-if="pending"></div>
    
    <!-- layout --> 
    <NuxtLayout v-if="!error && result.slug && result.slug.type " name="default" :data="result" :locale="locale" >
      <NuxtLayout :name="result.slug.type" :data="result" :locale="locale" ></NuxtLayout>
    </NuxtLayout>

  </div>
</template>