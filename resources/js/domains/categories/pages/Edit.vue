<script setup lang="ts">
import Form from '../components/Form.vue'
import { getCurrentRouteId, goToOverviewPage } from 'services/router'
import { categoryStore } from '../store'
import { Category } from '../types'

const category = categoryStore.getters.byId(getCurrentRouteId())

const update = (category: Category) => {
	categoryStore.actions.update(category)
	goToOverviewPage('categories')
}
</script>

<template>
	<Form :category="category" @submit="update" />
</template>
