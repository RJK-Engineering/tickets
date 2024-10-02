<script setup lang="ts">
import { computed } from 'vue'
import { ticketStore } from '..'
import { sortBy } from 'helpers/sort'
import TicketsTable from '../components/TicketsTable.vue'

const tickets = computed(() => sortBy(ticketStore.getters.all.value, 'created_at'));
ticketStore.actions.getAll();
</script>

<template>
	<TicketsTable v-if="tickets.length" :tickets="tickets" />
</template>
