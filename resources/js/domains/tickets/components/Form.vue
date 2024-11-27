<script setup lang="ts">
import { ref } from 'vue'
import { userStore } from 'domains/users/store'
import { formatUserId } from 'domains/users/helpers'
import { formatDate } from 'helpers/date'
import StatusInput from './StatusInput.vue'
import UserInput from 'domains/users/components/UserInput.vue'
import CategoryInput from '../../categories/components/CategoryInput.vue'

defineEmits(['submit'])

const props = defineProps(['ticket'])
const ticket = ref({...props.ticket})

userStore.actions.getAll()
const users = userStore.getters.all
</script>

<template>
	<form>
		<table>
			<tbody>
				<tr>
					<td><label for="title">Title</label></td>
					<td><input id="title" v-model.trim="ticket.title" maxlength="255" /></td>
				</tr>
				<tr>
					<td><label for="status">Categories</label></td>
					<td><CategoryInput :categories="ticket.category_ids" /></td>
				</tr>
				<tr>
					<td><label for="status">Status</label></td>
					<td><StatusInput id="status" :ticket="ticket" /></td>
				</tr>
				<tr v-if="ticket.createdAt">
					<td><label for="createdAt">Created At</label></td>
					<td>{{ formatDate(ticket.createdAt) }}</td>
				</tr>
				<tr v-if="ticket.createdBy">
					<td><label for="createdBy">Created By</label></td>
					<td>{{ formatUserId(ticket.createdBy) }}</td>
				</tr>
				<tr>
					<td><label for="assignedTo">Assigned To</label></td>
					<td><UserInput id="assignedTo" :ticket="ticket" :users="users" /></td>
				</tr>
				<tr v-if="ticket.updatedAt">
					<td><label for="updatedAt">Updated At</label></td>
					<td>{{ formatDate(ticket.updatedAt) }}</td>
				</tr>
				<tr>
					<td>
						<button @click.prevent="$emit('submit', ticket)" :disabled="!ticket.title">
							Submit
						</button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</template>
