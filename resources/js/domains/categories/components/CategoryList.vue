<script setup lang="ts">
import { Category } from '../types';

const props = defineProps(['categories'])
const categories = <Array<Category>>props.categories
</script>

<template>
{{ categories.map((category)=>category.name).sort().join(', ') }}
</template>
