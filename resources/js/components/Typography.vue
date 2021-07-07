<template>
    <div>
        <page-title>Typography</page-title>
        <div
            class="rounded-lg bg-gray-300 py-12 px-16 mb-10"
            style="max-width: 522px"
        >
            <div class="flex justify-end mb-10 items-center">
                <div class="rounded-full bg-black shadow w-8 h-8 mr-3"></div>
                <span class="text-xs">#222222</span>
            </div>

            <div class="flex justify-between mb-6">
                <strong class="text-xl font-light">Open Sans Light</strong>
                <span class="text-xl font-light">300</span>
            </div>

            <div class="flex justify-between mb-6">
                <strong class="text-xl font-normal">Open Sans Regular</strong>
                <span class="text-xl font-normal">400</span>
            </div>

            <div class="flex justify-between mb-6">
                <strong class="text-xl font-semibold"
                >Open Sans Semi Bold</strong
                >
                <span class="text-xl font-semibold">600</span>
            </div>

            <div class="flex justify-between">
                <strong class="text-xl font-bold">Open Sans Bold</strong>
                <span class="text-xl font-bold">700</span>
            </div>
        </div>

        <div
            class="rounded-lg bg-black text-white py-12 px-16 mb-8"
            style="max-width: 522px"
        >
            <div class="flex justify-end mb-10 items-center">
                <div class="rounded-full bg-white shadow w-8 h-8 mr-3"></div>
                <span class="text-xs">#FFFFFF</span>
            </div>

            <div class="flex justify-between mb-6">
                <strong class="text-xl font-light">Open Sans Light</strong>
                <span class="text-xl font-light">300</span>
            </div>

            <div class="flex justify-between mb-6">
                <strong class="text-xl font-normal">Open Sans Regular</strong>
                <span class="text-xl font-normal">400</span>
            </div>

            <div class="flex justify-between mb-6">
                <strong class="text-xl font-semibold"
                >Open Sans Semi Bold</strong
                >
                <span class="text-xl font-semibold">600</span>
            </div>

            <div class="flex justify-between">
                <strong class="text-xl font-bold">Open Sans Bold</strong>
                <span class="text-xl font-bold">700</span>
            </div>
        </div>
    </div>
</template>

<script>
import PageTitle from "./elements/PageTitle";
export default {
    components: {PageTitle}
}
</script>
