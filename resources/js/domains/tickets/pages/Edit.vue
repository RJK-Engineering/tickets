<script setup lang="ts">
import Form from '../components/Form.vue'
import { goToOverviewPage } from 'services/router'
import { ticketStore } from '..'
import { Ticket } from '../types'

const getTicket = (id: string) => {
	return ticketStore.getters.byId(Number(id)).value
}
const update = (ticket: Ticket) => {
	ticketStore.actions.update(ticket)
	goToOverviewPage('tickets')
}
</script>

<template>
	<Form :ticket="getTicket($route.params.id[0])" @submit="update" />
</template>
