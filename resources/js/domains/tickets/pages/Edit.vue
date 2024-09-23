<script setup>
import TicketForm from '../components/TicketForm.vue'
import { getTicket, updateTicket } from '../store'
import { goToRoute } from '../../../services/router'

const submit = (ticket) => {
	updateTicket(ticket)
	goToRoute('Tickets')
}
</script>

<template>
	<TicketForm :Ticket="getTicket($route.params.id).value" @submit="submit" />
</template>
