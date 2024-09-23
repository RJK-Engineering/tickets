<script setup lang="ts">
import TicketsTable from '../components/TicketsTable.vue'
import { getTickets } from '../store'
const books = getTickets()
</script>

<template>
	<TicketsTable v-if="books.length" :books="books" />
</template>
