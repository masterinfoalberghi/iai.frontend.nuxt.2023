<script setup>

    import useVuelidate from '@vuelidate/core'
    import { required, email} from '@vuelidate/validators'

    const runtimeConfig = useRuntimeConfig()

    // /** Props */
    const props = defineProps(['dictionary', 'locale']);
        
    // /** Variabili reattive */
    const sended = ref(false)
    const response_color = ref("")
    const response_subscribe = ref("")
    const link = getUrlByLang("/privacy-policy", props.locale )

    const state = reactive({
        email: '',
        confirmation: false,
    })

    const rules = {
        email: { required, email },
        confirmation: { required }
    }

    /** validazione form */
    const v_subscribe$ = useVuelidate(rules, state)

    // /** action */
    const subscribe = () => {

        sended.value = true;

        fetch(runtimeConfig.public.apiBase + "/api/subscribe",
            {
                method: "POST",
                headers: {"Content-Type": "application/json"},
                body: JSON.stringify(state),
            })
            .then((response) => response.json())
            .then((data) => {
                console.log(data)
                response_color.value = "bg-green-200"
                response_subscribe.value = data.data;
            });

    }

</script>

<template>

    <h3 class="text-lg font-medium mb-5 -mt-1">{{ write("title:newsletter", props.dictionary) }}</h3>

    <p class="border-l-2 border-green-400  px-2" v-show="response_subscribe != ''">
        {{response_subscribe}}
    </p>

    <p v-show="response_subscribe == ''">
        {{write("newsletter_intro", props.dictionary)}}
    </p>

    <img 
        src="/images/loading.gif"
        width="50" 
        height="32" 
        class="mt-4"
        v-show="sended && response_subscribe == ''" />

    <div class="form-subscribe" v-show="!sended">

        <div class="relative mt-6">

            <input 
                type="email" 
                v-model="v_subscribe$.email.$model" 
                :class="{ 'p-error ' : v_subscribe$.email.$invalid && sended == true }" 
                :placeholder="write('placeholder:email', props.dictionary)" />

            <span class="input-icon-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="14" viewBox="0 0 17.5 14" class="icon-ia opacity-50">
                    <path 
                        d="M18.75,6h-14A1.748,1.748,0,0,0,3.009,7.75L3,18.25A1.755,1.755,0,0,0,4.75,20h14a1.755,1.755,0,0,0,1.75-1.75V7.75A1.755,1.755,0,0,0,18.75,6Zm0,3.5-7,4.375L4.75,9.5V7.75l7,4.375,7-4.375Z" 
                        transform="translate(-3 -6)" 
                       />
                </svg>
            </span>

        </div>

        <div class="relative">
            <div class="flex items-center mt-3">

                <input 
                    id="confirmation"
                    type="checkbox" 
                    value="yes" 
                    v-model="v_subscribe$.confirmation.$model" 
                    class="opacity-0 cursor-pointer absolute top-1 h-8 w-8" />

                <div class="w-[20px] self-start pt-[2px]">

                    <svg xmlns="http://www.w3.org/2000/svg" v-show="!state.confirmation" height="20px" viewBox="0 0 24 24" width="20px" class="icon-ia-disabled">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" v-show="state.confirmation"  height="20px" viewBox="0 0 24 24" width="20px" class="icon-ia">
                        <path d="M22,5.18L10.59,16.6l-4.24-4.24l1.41-1.41l2.83,2.83l10-10L22,5.18z M19.79,10.22C19.92,10.79,20,11.39,20,12 c0,4.42-3.58,8-8,8s-8-3.58-8-8c0-4.42,3.58-8,8-8c1.58,0,3.04,0.46,4.28,1.25l1.44-1.44C16.1,2.67,14.13,2,12,2C6.48,2,2,6.48,2,12 c0,5.52,4.48,10,10,10s10-4.48,10-10c0-1.19-0.22-2.33-0.6-3.39L19.79,10.22z"/>
                    </svg>

                </div>

                <label for="confirmation" class="pl-3 cursor-pointer" v-html="privacyPolicy(props.dictionary, link)"></label>

            </div>
        </div>

        <button
            class="button w-auto mt-6" 
            @click="subscribe"
            :disabled="!state.confirmation || v_subscribe$.email.$invalid ">
            {{ write("button_subscribe", props.dictionary) }}</button>

    </div>

</template>
