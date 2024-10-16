<script setup lang="ts">
import { formatUserId } from '../helpers';

const props = defineProps(['ticket', 'users'])
</script>

<template>
<select v-if="users.length" v-model="ticket.assignedTo">
    <option v-for="user in users" :value="user.id">
        {{ formatUserId(user.id) }}
    </option>
</select>
</template>
