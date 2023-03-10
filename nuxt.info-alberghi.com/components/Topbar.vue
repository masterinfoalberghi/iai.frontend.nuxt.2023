<script setup>

    const runtimeConfig = useRuntimeConfig()

</script>

<template>
    <header>

    <div class="bg-gray-600 h-[72px] m-0 p-0">
        <div class="container mx-auto mb-0">
            <div class="flex">
                <div class="flex-none w-1/4 grid h-[72px]">
                    <a href="#">
                        <img src="/images/logo-iai.png" class="py-[19px]">
                    </a>
                </div>
                <div class="grow w-2/4 flex justify-center">
                    
                </div>
                <div class="flex-none w-1/4 h-[72px] flex justify-end">
                    <div class="flex my-auto">
                        
                        <Langs />
                        
                        <div class="my-auto mr-6"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-white" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-4h2v2h-2zm1.61-9.96c-2.06-.3-3.88.97-4.43 2.79-.18.58.26 1.17.87 1.17h.2c.41 0 .74-.29.88-.67.32-.89 1.27-1.5 2.3-1.28.95.2 1.65 1.13 1.57 2.1-.1 1.34-1.62 1.63-2.45 2.88 0 .01-.01.01-.01.02-.01.02-.02.03-.03.05-.09.15-.18.32-.25.5-.01.03-.03.05-.04.08-.01.02-.01.04-.02.07-.12.34-.2.75-.2 1.25h2c0-.42.11-.77.28-1.07.02-.03.03-.06.05-.09.08-.14.18-.27.28-.39.01-.01.02-.03.03-.04.1-.12.21-.23.33-.34.96-.91 2.26-1.65 1.99-3.56-.24-1.74-1.61-3.21-3.35-3.47z"/></svg></div>
                        <div class="my-auto mr-6"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-white" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13.35 20.13c-.76.69-1.93.69-2.69-.01l-.11-.1C5.3 15.27 1.87 12.16 2 8.28c.06-1.7.93-3.33 2.34-4.29 2.64-1.8 5.9-.96 7.66 1.1 1.76-2.06 5.02-2.91 7.66-1.1 1.41.96 2.28 2.59 2.34 4.29.14 3.88-3.3 6.99-8.55 11.76l-.1.09z"/></svg></div>                            
                        <div class="my-auto">
                            <!-- <a class="text-sm px-3 py-2 cursor-pointer" href="/dashboard">{{ $user->name }} on Dashboard</a> - 
                            <div id="logout"><logout /></div> -->
                            <!-- <button class="button-reverse-sm" onclick="location.href='{{ $header['url_login'] }}'">{{ DictionaryIA::write("label:signin") }}</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </header>

</template>