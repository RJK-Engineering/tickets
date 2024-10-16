<script setup lang="ts">
const props = defineProps(['ticket', 'categories'])
</script>

<template>
<select multiple>
    <option v-for="category in categories" :value="category.id">
        {{ category.name }}
    </option>
</select>
</template>
