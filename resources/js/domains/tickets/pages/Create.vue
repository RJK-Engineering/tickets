<script setup lang="ts">
import Form from '../components/Form.vue'
import { goToEditPage } from 'services/router'
import { Ticket } from '../types'
import { ticketStore } from '../store'

const store = (ticket: Ticket) => {
	ticketStore.actions.store(ticket)
	goToEditPage('tickets', ticket.id)
}
</script>

<template>
	<Form @submit="store" />
</template>
