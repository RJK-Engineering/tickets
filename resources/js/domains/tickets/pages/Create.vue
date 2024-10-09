<script setup lang="ts">
import TicketForm from '../components/TicketForm.vue'
import { goToOverviewPage } from 'services/router'
import { ticketStore } from '..';
import { Ticket } from '../types';

const create = (ticket: Ticket) => {
	ticketStore.actions.create(ticket)
	goToOverviewPage('tickets')
}
</script>

<template>
	<TicketForm :ticket="{}" @submit="create" />
</template>
