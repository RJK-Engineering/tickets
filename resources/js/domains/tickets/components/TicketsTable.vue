<script setup lang="ts">
import { Ticket } from '../types'
defineProps<{tickets: Ticket[]}>()
</script>

<template>
<table id="tickets">
    <tbody>
        <tr>
            <th>Title</th>
        </tr>
        <tr v-for="ticket in tickets">
            <td class="ticketTitle">{{ ticket.title }}</td>
        </tr>
    </tbody>
</table>
</template>
