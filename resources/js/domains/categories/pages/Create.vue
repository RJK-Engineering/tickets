<script setup lang="ts">
import Form from '../components/Form.vue'
import { goToEditPage } from 'services/router'
import { categoryStore } from '..'
import { Category } from '../types'

const store = (category: Category) => {
	categoryStore.actions.store(category)
	goToEditPage('categories', category.id)
}
</script>

<template>
	<Form @submit="store" />
</template>
