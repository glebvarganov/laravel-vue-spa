<template>
    <div>
        <page-title>Your Achievements</page-title>
        <input
            class="w-full text-sm p-2 px-4 border border-gray-400 rounded-md mb-8"
            placeholder="Your Laracast API Token"
            v-model="token"
            @keyup.enter="fetchAchievements">

        <p class="block w-full rounded-md bg-red-200 p-2 px-4 text-red-900" v-if="message" v-text="message"></p>
        <ul>
            <li
                v-for="achievement in achievements"
                v-text="achievement.name"
            ></li>
        </ul>
    </div>

</template>

<script>
import PageTitle from "./elements/PageTitle";
export default {
    components: {PageTitle},
    data() {
        return {
            achievements: [],
            token: '',
            message: ''
        };
    },
    methods: {
        fetchAchievements() {
            axios.get(`http://assets.test/api/achievements?api_token=${this.token}`)
                .catch(error => {
                    this.message = error.response.data.message;
                    this.achievements = [];
                })
                .then(({data}) => {
                    this.achievements = data;
                    this.message = null;
                })
        }
    },

}
</script>
