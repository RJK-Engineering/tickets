<script setup lang="ts">
import { computed } from 'vue'
import { sortBy } from 'helpers/sort'
import { ticketStore } from '../store'
import { categoryStore } from '../../categories/store';
import Table from '../components/Table.vue'

const tickets = computed(() => sortBy(ticketStore.getters.all.value, 'createdAt'))
ticketStore.actions.getAll()
categoryStore.actions.getAll()
</script>

<template>
	<Table v-if="tickets.length" :tickets="tickets" />
</template>
