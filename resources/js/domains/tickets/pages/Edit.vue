<script setup lang="ts">
import Form from '../components/Form.vue'
import { goToOverviewPage } from 'services/router'
import { Ticket } from '../types'
import { store } from '../store'

store.actions.getAll()

const getTicket = (id: string) => {
	return store.getters.byId(Number(id)).value
}
const update = (ticket: Ticket) => {
	console.log(ticket)
	store.actions.update(ticket)
	// goToOverviewPage('tickets')
}
</script>

<template>
	<Form :ticket="getTicket($route.params.id[0])" @submit="update" />
</template>
