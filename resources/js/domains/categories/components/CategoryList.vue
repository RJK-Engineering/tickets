<script setup lang="ts">
const props = defineProps(['categories'])
</script>

<template>
{{ props.categories.map((e)=>e.name).join(', ') }}
</template>
