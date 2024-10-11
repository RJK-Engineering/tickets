<script setup lang="ts">
import TicketForm from '../components/TicketForm.vue'
import { goToEditPage } from 'services/router'
import { ticketStore } from '..'
import { Ticket } from '../types'

const store = (ticket: Ticket) => {
	ticketStore.actions.store(ticket)
	goToEditPage('tickets', ticket.id)
}
</script>

<template>
	<TicketForm @submit="store" />
</template>
