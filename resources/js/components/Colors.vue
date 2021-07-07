<template>
    <div>
        <page-title>Colors</page-title>
        <div class="mb-16">
            <p class="mb-8">Primary - Blue, White, Dark Grey</p>

            <div class="flex">
                <div class="text-center mr-8">
                    <div class="rounded-full bg-blue-700 shadow w-16 h-16 mb-3"></div>
                    <p class="text-xs">#1D4ED8</p>
                </div>

                <div class="text-center mr-8">
                    <div class="rounded-full bg-white shadow w-16 h-16 mb-3"></div>
                    <p class="text-xs">#FFF</p>
                </div>

                <div class="text-center">
                    <div class="rounded-full bg-black shadow w-16 h-16 mb-3"></div>
                    <p class="text-xs">#000</p>
                </div>
            </div>
        </div>

        <div class="mb-16">
            <p class="mb-8">Secondary - Category Colors & Accents</p>

            <div class="flex">
                <color-range
                    to="#EC454F"
                    from="#F44881"
                    name="Laravel"
                ></color-range>

                <color-range
                    to="#637BFF"
                    from="#21C8F6"
                    name="PHP"
                ></color-range>

                <color-range
                    to="#50A88D"
                    from="#6EDCC4"
                    name="Testing"
                ></color-range>

                <color-range
                    to="#E59D3E"
                    from="#F19A1A"
                    name="JavaScript"
                ></color-range>

                <color-range
                    to="#8465E5"
                    from="#AA76B9"
                    name="Tooling"
                ></color-range>
            </div>
        </div>

        <div>
            <p class="mb-8">Icons</p>

            <div class="flex">
                <div class="text-center mr-8">
                    <div class="rounded-full shadow w-16 h-16 mb-3 bg-gray-500"></div>
                    <p class="text-xs">#6B7281</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import PageTitle from "./elements/PageTitle";
import ColorRange from "./elements/ColorRange";
export default {
    components: {PageTitle, ColorRange}
}
</script>
