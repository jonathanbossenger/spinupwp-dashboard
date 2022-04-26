<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg grid grid-cols-2 gap-4 p-10"
                >
                    <item
                        :label="server.name"
                        :href="route('servers.show', server.id)"
                        v-for="server in servers"
                        :key="server.id"
                    />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Item from "@/Jetstream/Item.vue";

export default defineComponent({
    props: ["servers", "events"],

    components: {
        AppLayout,
        Item,
    },
});
</script>
