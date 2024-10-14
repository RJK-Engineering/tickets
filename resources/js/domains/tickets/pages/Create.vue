<script setup lang="ts">
import Form from '../components/Form.vue'
import { goToEditPage } from 'services/router'
import { ticketStore } from '..'
import { Ticket } from '../types'

const store = (ticket: Ticket) => {
	ticketStore.actions.store(ticket)
	goToEditPage('tickets', ticket.id)
}
</script>

<template>
	<Form @submit="store" />
</template>
