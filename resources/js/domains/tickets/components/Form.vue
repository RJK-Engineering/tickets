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
			<tr v-if="ticket.created_at">
				<td><label for="created_at">Created At</label></td>
				<td><input id="created_at" v-model.trim="ticket.created_at" maxlength="255" /></td>
			</tr>
			<tr v-if="ticket.created_by">
				<td><label for="created_by">Created By</label></td>
				<td><input id="created_by" v-model.trim="ticket.created_by" maxlength="255" /></td>
			</tr>
			<tr>
				<td><label for="assigned_to">Assigned To</label></td>
				<td>
					<select id="author_id" v-if="users.length" v-model="ticket.assigned_to">
                    <option></option>
                    <option v-for="user in users" :value="user.id">
                        {{ user.firstName + ' ' + user.lastName }}
                    </option>
                </select>
				</td>
			</tr>
			<tr v-if="ticket.updated_at">
				<td><label for="updated_at">Updated At</label></td>
				<td><input id="updated_at" v-model.trim="ticket.updated_at" maxlength="255" /></td>
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
