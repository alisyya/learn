<template>
    <app-layout>
        <div>
        <div class="flex h-screen w-full bg-gray-800 " x-data="{openMenu:1}">
            <div class="flex flex-col flex-1 w-full overflow-y-auto">
                <main class="relative z-0 flex-1 pb-8 bg-black">
                    <!--right items-->
                    <div class="flex justify-end object-right place-items-center">
                        <svg  viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40%" id="blobSvg">
                            <path id="blob" d="M397,307Q407,364,352.5,381Q298,398,249,400Q200,402,160,373Q120,344,102,297Q84,250,101,202Q118,154,149,94Q180,34,243,55.5Q306,77,355,107.5Q404,138,395.5,194Q387,250,397,307Z" fill="#eeeeee"></path>
                        </svg>
                    </div>
                    <!--Left items-->
                    <div class="bg-black text-white py-8">
                        <div class="container mx-auto flex flex-col items-start md:flex-row my-12 md:my-24">
                            <div class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8">
                                <p class="text-3xl md:text-4xl leading-normal md:leading-relaxed mb-2">Hello, I'm Alif </p>
                                <p class="text-sm md:text-base text-gray-50 mb-4">
                                    Here’s your guide to the tech fest 2021 process. Go through all the steps to know the exact process of the
                                    fest.
                                </p>
                                <a href="/index"
                                   class="bg-transparent mr-auto hover:bg-yellow-300 text-yellow-300 hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">
                                    My Portofolio</a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'

    export default {
        components: {
            AppLayout,
            Welcome,
        },
    }
</script>
