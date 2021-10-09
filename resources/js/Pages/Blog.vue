<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
                HELLO BLOG WELCOME TO MY GUYS !!!!
            </h2>
        </template>
        <div class="grid grid-cols-3 gap-4">
            <div class="container mx-auto mt-10 w-72">
                <div class="card text-center shadow-2xl">
                    <figure class="px-10 pt-10">
                        <img src="https://picsum.photos/id/1005/400/250" class="rounded-xl">
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title my-4">shadow, center, padding</h2>
                        <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos. Sit sit necessitatibus veritatis sed molestiae voluptates incidunt iure sapiente.</p>
                        <div class="justify-center card-actions">
                            <button class="btn btn-outline btn-accent">More info</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto mt-10 w-72">
                <div class="card text-center shadow-2xl">
                    <figure class="px-10 pt-10">
                        <img src="https://picsum.photos/id/1005/400/250" class="rounded-xl">
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title my-4">shadow, center, padding</h2>
                        <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos. Sit sit necessitatibus veritatis sed molestiae voluptates incidunt iure sapiente.</p>
                        <div class="justify-center card-actions">
                            <button class="btn btn-outline btn-accent">More info</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto mt-10 w-72">
                <div class="card text-center shadow-2xl">
                    <figure class="px-10 pt-10">
                        <img src="https://picsum.photos/id/1005/400/250" class="rounded-xl">
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title my-4">shadow, center, padding</h2>
                        <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos. Sit sit necessitatibus veritatis sed molestiae voluptates incidunt iure sapiente.</p>
                        <div class="justify-center card-actions">
                            <button class="btn btn-outline btn-accent">More info</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "../Layouts/AppLayout";

export default {
    components: {
      AppLayout
    },
}
</script>

<style scoped>

</style>
