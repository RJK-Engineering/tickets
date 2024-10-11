<script setup lang="ts">
import { goToEditPage, goToShowPage } from 'services/router'
import { Ticket } from '../types'
import { ticketStore } from '..'

defineProps<{tickets: Ticket[]}>()

function formatDate(date: string) {
    return new Date(date).toDateString()
}
function formatUser(userId: string) {
    return Number(userId)
}
function ticketCategories(ticket: Ticket) {
    return ""
}
function removeTicket(ticket: Ticket) {
    ticketStore.actions.delete(ticket.id)
}
function edit(ticket: Ticket) {
    goToEditPage('tickets', ticket.id)
}
function show(ticket: Ticket) {
    goToShowPage('tickets', ticket.id)
}
</script>

<template>
<table id="tickets">
    <tbody>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Categories</th>
            <th>Status</th>
            <th>Created By</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Assigned To</th>
        </tr>
        <tr v-for="ticket in tickets" @click="show(ticket)">
            <td class="ticketId">{{ ticket.id }}</td>
            <td class="ticketTitle">{{ ticket.title }}</td>
            <td class="ticketCategories">{{ ticketCategories(ticket) }}</td>
            <td class="ticketStatus">{{ ticket.status }}</td>
            <td class="ticketCreatedBy">{{ formatUser(ticket.created_by) }}</td>
            <td class="ticketCreatedAt">{{ formatDate(ticket.created_at) }}</td>
            <td class="ticketUpdatedAt">{{ formatDate(ticket.updated_at) }}</td>
            <td class="ticketAssignedTo">{{ formatUser(ticket.assigned_to) }}</td>

            <td class="editTicket"><button @click="edit(ticket)">Edit</button></td>
            <td class="deleteTicket"><button @click="removeTicket(ticket)">Delete</button></td>
        </tr>
    </tbody>
</table>
</template>
