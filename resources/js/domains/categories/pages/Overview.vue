<script setup lang="ts">
import { computed } from 'vue'
import { categoryStore } from '..'
import { sortBy } from 'helpers/sort'
import Table from '../components/Table.vue'

const categories = computed(() => sortBy(categoryStore.getters.all.value, 'createdAt'));
categoryStore.actions.getAll();
</script>

<template>
	<Table v-if="categories.length" :categories="categories" />
</template>
