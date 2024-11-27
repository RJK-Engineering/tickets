<script setup lang="ts">
import Form from '../components/Form.vue'
import { goToOverviewPage } from 'services/router'
import { categoryStore } from '../store'
import { Category } from '../types'

const create = async (category: Category) => {
	await categoryStore.actions.store(category)
	goToOverviewPage('categories')
	// This didn't work but now does :)
	// goToEditPage('categories', category.id)
}
</script>

<template>
	<Form @submit="create" />
</template>
