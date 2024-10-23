<script setup lang="ts">
const props = defineProps(['categories'])
</script>

<template>
<ul>
    <li v-for="category in props.categories" :value="category.id">
        <input type="checkbox" :id="category.id" />
        <label :for="category.id">{{ category.name }}</label>
    </li>
</ul>
</template>
