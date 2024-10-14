<script setup>
import { ref } from 'vue'
import { userStore } from '../../users/store'

defineEmits(['submit'])

const props = defineProps(['ticket'])
const ticket = ref({...props.ticket})

userStore.actions.getAll()
const users = userStore.getters.all
</script>

<template>
	<form>
		<table>
			<tr>
				<td><label for="title">Title</label></td>
				<td><input id="title" v-model.trim="ticket.title" maxlength="255" /></td>
			</tr>
			<tr>
				<td><label for="status">Status</label></td>
				<td><input id="status" v-model.trim="ticket.status" maxlength="255" /></td>
			</tr>
			<tr v-if="ticket.createdAt">
				<td><label for="createdAt">Created At</label></td>
				<td><input id="createdAt" v-model.trim="ticket.createdAt" maxlength="255" /></td>
			</tr>
			<tr v-if="ticket.createdBy">
				<td><label for="createdBy">Created By</label></td>
				<td><input id="createdBy" v-model.trim="ticket.createdBy" maxlength="255" /></td>
			</tr>
			<tr>
				<td><label for="assignedTo">Assigned To</label></td>
				<td>
					<select id="assignedTo" v-if="users.length" v-model="ticket.assignedTo">
						<option></option>
						<option v-for="user in users" :value="user.id">
							{{ user.firstName + ' ' + user.lastName }}
						</option>
                	</select>
				</td>
			</tr>
			<tr v-if="ticket.updatedAt">
				<td><label for="updatedAt">Updated At</label></td>
				<td><input id="updatedAt" v-model.trim="ticket.updatedAt" maxlength="255" /></td>
			</tr>
			<tr>
				<td>
					<button @click.prevent="$emit('submit', ticket)" :disabled="!ticket.title">
						Submit
					</button>
				</td>
			</tr>
		</table>
	</form>
</template>
