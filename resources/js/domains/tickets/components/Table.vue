<script setup lang="ts">
import { goToEditPage, goToShowPage } from 'services/router'
import { Ticket } from '../types'
import { formatUserId } from '../../users/helpers'
import { formatDate } from '../../../helpers/date'
import { ticketStore } from '../store'
import CategoryList from '../../categories/components/CategoryList.vue'

defineProps<{tickets: Ticket[]}>()

function removeTicket(ticket: Ticket) {
    ticketStore.actions.delete(ticket.id)
}
function edit(ticket: Ticket) {
    goToEditPage('tickets', ticket.id)
}
function show(ticket: Ticket) {
    goToEditPage('tickets', ticket.id)
    // goToShowPage('tickets', ticket.id)
}
</script>

<template>
<table>
    <thead>
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
    </thead>
    <tbody>
        <tr v-for="ticket in tickets" @click="show(ticket)">
            <td class="ticketId">{{ ticket.id }}</td>
            <td class="ticketTitle">{{ ticket.title }}</td>
            <td class="ticketCategories"><CategoryList :categories="ticket.category_ids" /></td>
            <td class="ticketStatus">{{ ticket.status }}</td>
            <td class="ticketCreatedBy">{{ formatUserId(ticket.createdBy) }}</td>
            <td class="ticketCreatedAt">{{ formatDate(ticket.createdAt) }}</td>
            <td class="ticketUpdatedAt">{{ formatDate(ticket.updatedAt) }}</td>
            <td class="ticketAssignedTo">{{ formatUserId(ticket.assignedTo) }}</td>

            <td class="editTicket"><button @click="edit(ticket)">Edit</button></td>
            <td class="deleteTicket"><button @click="removeTicket(ticket)">Delete</button></td>
        </tr>
    </tbody>
</table>
</template>
