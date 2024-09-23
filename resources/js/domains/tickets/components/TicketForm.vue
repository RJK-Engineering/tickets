<script setup>
import { ref } from 'vue'

defineEmits(['submit'])

const props = defineProps(['ticket'])
const ticket = ref({...props.ticket})

</script>

<template>
	<form>
		<table>
			<tr>
				<td><label for="title">Title</label></td>
				<td><input id="title" v-model.trim="ticket.title" maxlength="255" /></td>
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
