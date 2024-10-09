<script setup lang="ts">
import TicketForm from '../components/TicketForm.vue'
import { ticketStore } from '..'
import { goToOverviewPage } from 'services/router'
import { Ticket } from '../types';

const update = (ticket: Ticket) => {
	ticketStore.actions.update(ticket)
	goToOverviewPage('Tickets')
}
</script>

<template>
	<TicketForm :Ticket="ticketStore.actions.getById(Number($route.params.id))" @submit="update" />
</template>
