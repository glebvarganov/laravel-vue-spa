<template>
    <div>
        <page-title>Logo Symbol</page-title>
        <div class="mb-10">
            <picture class="shadow rounded-lg flex items-center justify-center mb-8" style="height: 382px;">
                <img src="/images/symbol-original.svg" alt="logo" />
            </picture>
            <div class="flex items-center justify-between">
                <p>Original symbol in <strong>white</strong> background.</p>
                <a href="/images/symbol-original.svg" class="border border-gray-200 rounded-full px-8 py-2 font-bold text-black text-xs">symbol-original.svg</a>
            </div>
        </div>

        <div class="mb-10">
            <picture class="bg-blue-700 shadow rounded-lg  flex items-center justify-center mb-8" style="height: 382px;">
                <img src="/images/symbol-negative.svg" alt="logo" />
            </picture>
            <div class="flex items-center justify-between">
                <p>Negative symbol in <strong>blue</strong> background.</p>
                <a href="/images/symbol-negative.svg" class="border border-gray-200 rounded-full px-8 py-2 font-bold text-black text-xs">symbol-negative.svg</a>
            </div>
        </div>

        <div class="mb-10">
            <picture class="bg-black shadow rounded-lg  flex items-center justify-center mb-8" style="height: 382px;">
                <img src="/images/symbol-pure-negative.svg" alt="logo" />
            </picture>
            <div class="flex items-center justify-between">
                <p>Pure negative symbol in <strong>dark</strong> background.</p>
                <a href="/images/symbol-pure-negative.svg" class="border border-gray-200 rounded-full px-8 py-2 font-bold text-black text-xs">symbol-pure-negative.svg</a>
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
