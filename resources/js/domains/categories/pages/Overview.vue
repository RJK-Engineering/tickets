<script setup lang="ts">
import { computed } from 'vue'
import { store } from '../store'
import { sortBy } from 'helpers/sort'
import Table from '../components/Table.vue'

const categories = computed(() => sortBy(store.getters.all.value, 'name'))
store.actions.getAll()
</script>

<template>
	<Table v-if="categories.length" :categories="categories" />
</template>
