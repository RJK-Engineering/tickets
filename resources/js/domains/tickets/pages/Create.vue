<script setup lang="ts">
import Form from '../components/Form.vue'
import { goToEditPage } from 'services/router'
import { Ticket } from '../types'
import { store } from '../store'

const create = (ticket: Ticket) => {
	store.actions.store(ticket)
	goToEditPage('tickets', ticket.id)
}
</script>

<template>
	<Form @submit="create" />
</template>
