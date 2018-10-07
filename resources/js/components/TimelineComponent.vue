<template>
    <timeline>
        <timeline-title>title</timeline-title>
        <timeline-item bg-color="#9dd8e0">item1</timeline-item>
        <timeline-item :hollow="true">item2</timeline-item>
    </timeline>
</template>

<script>
    import { Timeline, TimelineItem, TimelineTitle } from 'vue-cute-timeline'
    export default {
        // register F7 Vue components in required Vue component
        name: "timeline-component",
        components: {
            Timeline,
            TimelineItem,
            TimelineTitle
        }
    }
</script>

<style scoped>

</style>