<script setup lang="ts">
import { ref } from 'vue'

defineEmits(['submit'])

const props = defineProps(['category'])
const category = ref({...props.category})
</script>

<template>
	<form>
		<table>
			<thead>
				<tr>
					<td><label for="name">Name</label></td>
					<td><input id="name" v-model.trim="category.name" maxlength="255" /></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<button @click.prevent="$emit('submit', category)" :disabled="!category.name">
							Submit
						</button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</template>
