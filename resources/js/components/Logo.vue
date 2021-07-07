<template>
    <div>
        <page-title>Full Logo</page-title>
        <div class="mb-10">
            <picture class="shadow rounded-lg flex items-center justify-center mb-8" style="height: 382px;">
                <img src="/images/logo.svg" alt="logo" />
            </picture>
            <div class="flex items-center justify-between">
                <p>Original logo in <strong>white</strong> background.</p>
                <a href="/images/logo.svg" class="border border-gray-200 rounded-full px-8 py-2 font-bold text-black text-xs">logo.svg</a>
            </div>
        </div>

        <div class="mb-10">
            <picture class="bg-blue-700 shadow rounded-lg  flex items-center justify-center mb-8" style="height: 382px;">
                <img src="/images/negative-logo.svg" alt="logo" />
            </picture>
            <div class="flex items-center justify-between">
                <p>Negative logo in <strong>blue</strong> background.</p>
                <a href="/images/negative-logo.svg" class="border border-gray-200 rounded-full px-8 py-2 font-bold text-black text-xs">negative-logo.svg</a>
            </div>
        </div>

        <div class="mb-10">
            <picture class="bg-black shadow rounded-lg  flex items-center justify-center mb-8" style="height: 382px;">
                <img src="/images/pure-negative-logo.svg" alt="logo" />
            </picture>
            <div class="flex items-center justify-between">
                <p>Pure negative logo in <strong>dark</strong> background.</p>
                <a href="/images/pure-negative-logo.svg" class="border border-gray-200 rounded-full px-8 py-2 font-bold text-black text-xs">pure-negative-logo.svg</a>
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
