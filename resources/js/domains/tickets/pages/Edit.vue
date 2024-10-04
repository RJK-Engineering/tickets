<script setup>
import TicketForm from '../components/TicketForm.vue'
import { ticketStore } from '..'
import { goToRoute } from '../../../services/router'
import { Ticket } from '../types';

const submit = (ticket: Ticket) => {
	ticketStore.update(ticket)
	goToRoute('Tickets')
}
</script>

<template>
	<TicketForm :Ticket="getTicket($route.params.id).value" @submit="submit" />
</template>
