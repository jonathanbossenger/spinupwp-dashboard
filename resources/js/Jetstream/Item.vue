<template>
    <div
        class="flex flex-col pl-5 py-2 border border-gray-50 bg-white sm:rounded my-3"
    >
        <div
            class="font-bold text-sm md:text-lg lg:text-xl group-hover:underline flex flex-row items-center justify-between"
        >
            <span class="self-start">{{ label }}</span>
            <Link
                v-if="href"
                :href="href"
                class="text-sm font-medium text-indigo-900 self-end"
            >View</Link
            >
        </div>
        <slot></slot>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
    props: ["label", "href"],

    components: {
        Link,
    },
});
</script>
