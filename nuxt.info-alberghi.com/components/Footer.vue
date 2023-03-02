<script setup>
    const date = new Date();
</script>
<template>
    <footer class="border-t border-gray-300 bg-gradient-to-b from-gray-100 bg-white">
        <div class="w-full m-0 p-0">
            <div class="container flex space-x-10 pt-20 pb-10 mx-auto">
                <div class="lg:w-1/3 md:w-1/2 w-full border-r border-gray-300 " >
                    <picture>
                        <img src="//static.info-alberghi.com/assets/romagna/others/logo-info-alberghi.1671542843528.png" >
                    </picture>

                    <ul class="mt-5">
                        <li class="relative pl-5 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="absolute left-0 top-1 opacity-50">
                                <path d="M0,0H16V16H0Z" fill="none"/>
                                <path d="M13.1,3A5.6,5.6,0,0,0,7.5,8.6c0,4.2,5.6,10.4,5.6,10.4s5.6-6.2,5.6-10.4A5.6,5.6,0,0,0,13.1,3Zm0,7.6a2,2,0,1,1,2-2A2,2,0,0,1,13.1,10.6Z" transform="translate(-5.1 -3)" />
                            </svg>
                            Via Alessandro Gambalunga, 81/A<br />47921 Rimini - Emilia Romagna
                        </li>
                        <li class="relative pl-5 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 24 24" width="16" class="absolute left-0 top-1 opacity-50">
                                <path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-.4 4.25l-7.07 4.42c-.32.2-.74.2-1.06 0L4.4 8.25c-.25-.16-.4-.43-.4-.72 0-.67.73-1.07 1.3-.72L12 11l6.7-4.19c.57-.35 1.3.05 1.3.72 0 .29-.15.56-.4.72z"/>
                            </svg>
                            Email: box[at]info-alberghi.com
                        </li>
                        <li class="relative pl-5 mb-2">
                            P.IVA: 03 479 440 400
                        </li>
                    </ul>

                    <ul class="mt-6">

                        <li class="relative pl-5 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 24 24" width="16" class="absolute left-0 top-1 opacity-50">
                                <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z"/>
                            </svg>
                            <a href="#">Privacy policy</a>
                        </li>

                        <li class="relative pl-5 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 24 24" width="16" class="absolute left-0 top-1 opacity-50">
                                <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z"/>
                            </svg>
                            <a href="#">Cookie policy</a>
                        </li>

                        <li class="relative pl-5 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 24 24" width="16" class="absolute left-0 top-1 opacity-50">
                                <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z"/>
                            </svg>
                            <a href="#">Blog</a>
                        </li>

                    </ul>
        
                </div>
                <div class="lg:w-1/3 md:w-1/2 w-full px-4 border-r border-gray-300">
                    
                </div>
                <div class="lg:w-1/3 md:w-1/2 w-full px-4 ">
                    
                </div>
            </div>
        </div>
        <div class="w-full">
            <p class="text-sm text-center my-6 py-2 text-gray-400">
                &copy; {{ date.getFullYear() }}
            </p>
        </div>
    </footer>
</template>