<template>
    <div>
        <page-title>Site stats</page-title>

        <ul>
            <li><strong>Total: </strong> {{ series }}</li>
            <li><strong>Total lessons: </strong> {{ lessons }}</li>
        </ul>
    </div>
</template>

<script>
import PageTitle from "./elements/PageTitle";
export default {
    components: { PageTitle },
    name: "SiteStats",
    data() {
        return {
            series: 0,
            lessons: 0
        }
    },
    created() {
        axios.get('http://assets.test/api/stats').then( ({ data }) => {
            this.series = data.series;
            this.lessons = data.lessons;
        })
    }
}
</script>

<style scoped>

</style>
