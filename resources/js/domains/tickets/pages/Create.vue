<script setup>
import TicketForm from '../components/TicketForm.vue'
import { createTicket } from '../store'
import { goToRoute } from '../../../services/router'

const submit = (ticket) => {
	createTicket(ticket)
	goToRoute('Tickets')
}
</script>

<template>
	<TicketForm :ticket="{}" @submit="submit" />
</template>
