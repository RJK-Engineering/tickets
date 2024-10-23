<script setup lang="ts">
import { computed } from 'vue'
import { sortBy } from 'helpers/sort'
import { store } from '../store'
import Table from '../components/Table.vue'

const tickets = computed(() => sortBy(store.getters.all.value, 'createdAt'))
store.actions.getAll()
</script>

<template>
	<Table v-if="tickets.length" :tickets="tickets" />
</template>
