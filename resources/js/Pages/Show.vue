<template>
    <app-layout :title="server.name">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg grid grid-cols-2 gap-4 p-10"
                >
                    <p class="mb-2 font-bold">
                        IP Address:
                        <span class="font-thin">{{ server.ip_address }}</span>
                    </p>
                    <p class="mb-2 font-bold">
                        Ubuntu
                        <span class="font-thin">{{
                            server.ubuntu_version
                        }}</span>
                    </p>
                    <p class="mb-2 font-bold">
                        Database Server:
                        <span class="font-thin">{{
                            server.database.server
                        }}</span>
                    </p>
                </div>
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg grid mt-5 p-10"
                >
                    <div class="flex flex-row justify-between">
                        <h1 class="font-bold text-xl text-gray-900">Sites</h1>
                        <jet-button>Create new site</jet-button
                        >
                    </div>
                    <div class="grid-cols-2 gap-4" v-if="sites.length">
                        <item
                            :label="site.domain"
                            href="#"
                            v-for="site in sites"
                            :key="site.id"
                        />
                    </div>
                    <h2 class="text-center font-semibold text-gray-800" v-else>
                        No sites found
                    </h2>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Item from "@/Jetstream/Item.vue";
import JetButton from "@/Jetstream/Button.vue";

export default defineComponent({
    props: {
        server: {
            type: Object,
            required: true,
        },
        sites: {
            type: Array,
            required: true,
        },
    },
    components: {
        AppLayout,
        Item,
        JetButton,
    },
});
</script>
