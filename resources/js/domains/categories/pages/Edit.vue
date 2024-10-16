<script setup lang="ts">
import Form from '../components/Form.vue'
import { goToOverviewPage } from 'services/router'
import { categoryStore } from '..'
import { Category } from '../types'

const getTicket = (id: string) => {
	return categoryStore.getters.byId(Number(id)).value
}
const update = (category: Category) => {
	categoryStore.actions.update(category)
	goToOverviewPage('categories')
}
</script>

<template>
	<Form :category="getTicket($route.params.id[0])" @submit="update" />
</template>
