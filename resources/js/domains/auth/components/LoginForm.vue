<script setup>
import { ref } from 'vue'
defineEmits(['submit'])
const user = ref({})
</script>

<template>
	<form>
		<table>
			<tr>
				<td><label for="username">Name</label></td>
				<td><input id="username" v-model.trim="user.name" maxlength="255" /></td>
			</tr>
			<tr>
				<td><label for="password">Password</label></td>
				<td><input type="password" id="password" v-model.trim="user.password" maxlength="255" /></td>
			</tr>
			<tr>
				<td>
					<button @click.prevent="$emit('submit', user)" :disabled="!user.name || !user.password">
						Submit
					</button>
				</td>
			</tr>
		</table>
	</form>
</template>
