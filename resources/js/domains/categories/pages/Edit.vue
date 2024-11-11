<script setup lang="ts">
import Form from '../components/Form.vue'
import { goToOverviewPage } from 'services/router'
import { categoryStore } from '../store'
import { Category } from '../types'

const getTicket = (id: number) => {
	return categoryStore.getters.byId(id).value
}
const update = (category: Category) => {
	categoryStore.actions.update(category)
	goToOverviewPage('categories')
}
</script>

<template>
	<Form :category="getTicket(Number($route.params.id))" @submit="update" />
</template>
