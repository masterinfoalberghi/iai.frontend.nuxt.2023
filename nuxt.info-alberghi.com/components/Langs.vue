<script setup>

    const langs = ["it", "en", "fr", "de"];
    const locale = useState('locale');
    const viewLangPanel = ref(false);
    

</script>
<template>

    <div id="lang_selector" class="my-auto  mr-6 relative cursor-pointer" @mouseover="viewLangPanel = true" @mouseleave="viewLangPanel = false">
        <img class="mt-[2px] w-[24px] " :src="'/images/flags/' + locale +'.svg'" />
        
        <div v-if="viewLangPanel" id="langs" class="absolute top-0 -ml-[100px] left-2 w-[200px] ">
        <div class="mt-9 bg-white px-3 py-2 rounded shadow-md align-middle">
            <ul class="p-0 m-0">
                <li v-for="(l, i) in langs" class="align-middle my-1 p-1 cursor-pointer  rounded">
                    <a :href="getUrlByLang(l)" class="block">
                        <img class=" w-[24px] inline-block" :src="'/images/flags/' + l +'.svg'" />
                        <span class="pl-4 align-middle">{{ write("lang:" + l) }}</span>
                    </a>
                </li>
            </ul>
        </div>
        </div>

    </div>
</template>