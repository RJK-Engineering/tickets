<script setup lang="ts">
import { Ticket } from '../types'
defineProps<{tickets: Ticket[]}>()
</script>

<template>
<table id="tickets">
    <tbody>
        <tr>
            <th>Title</th>
            <th>Created By</th>
            <th>Assigned To</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        <tr v-for="ticket in tickets">
            <td class="ticketTitle">{{ ticket.title }}</td>
            <td class="ticketCreatedBy">{{ ticket.createdBy }}</td>
            <td class="ticketAssignedTo">{{ ticket.assignedTo }}</td>
            <td class="ticketCreatedAt">{{ ticket.createdAt }}</td>
            <td class="ticketUpdatedAt">{{ ticket.updatedAt }}</td>
        </tr>
    </tbody>
</table>
</template>
