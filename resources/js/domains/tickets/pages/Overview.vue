<script setup lang="ts">
import { computed } from 'vue'
import { ticketStore } from '..'
import { sortBy } from 'helpers/sort'
import Table from '../components/Table.vue'

const tickets = computed(() => sortBy(ticketStore.getters.all.value, 'created_at'));
ticketStore.actions.getAll();
</script>

<template>
	<Table v-if="tickets.length" :tickets="tickets" />
</template>
