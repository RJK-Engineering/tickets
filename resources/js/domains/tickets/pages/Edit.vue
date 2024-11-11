<script setup lang="ts">
import Form from '../components/Form.vue'
import { goToOverviewPage } from 'services/router'
import { Ticket } from '../types'
import { ticketStore } from '../store'

ticketStore.actions.getAll()

const getTicket = (id: number) => {
	return ticketStore.getters.byId(Number(id)).value
}
const update = (ticket: Ticket) => {
	console.log(ticket)
	ticketStore.actions.update(ticket)
	// goToOverviewPage('tickets')
}
</script>

<template>
	<Form :ticket="getTicket(Number($route.params.id))" @submit="update" />
</template>
