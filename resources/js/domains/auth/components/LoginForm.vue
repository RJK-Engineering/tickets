<script setup lang="ts">
import { ref } from 'vue'
defineEmits(['submit'])
const user = ref({})
</script>

<template>
	<form>
		<table>
			<tr>
				<td><label for="email">Email</label></td>
				<td><input id="email" v-model.trim="user.email" maxlength="255" /></td>
			</tr>
			<tr>
				<td><label for="password">Password</label></td>
				<td><input type="password" id="password" v-model.trim="user.password" maxlength="255" /></td>
			</tr>
			<tr>
				<td>
					<button @click.prevent="$emit('submit', user)" :disabled="!user.email || !user.password">
						Log In
					</button>
				</td>
			</tr>
		</table>
	</form>
</template>
