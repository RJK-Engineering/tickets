<script setup lang="ts">
const props = defineProps(['ticket'])
</script>

<template>
<select v-model="ticket.status">
    <option>In afwachting</option>
    <option>In behandeling</option>
    <option>Afgehandeld</option>
</select>
</template>
