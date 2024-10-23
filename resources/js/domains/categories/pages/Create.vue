<script setup lang="ts">
import Form from '../components/Form.vue'
import { goToEditPage } from 'services/router'
import { store } from '../store'
import { Category } from '../types'

const create = (category: Category) => {
	store.actions.store(category)
	goToEditPage('categories', category.id)
}
</script>

<template>
	<Form @submit="create" />
</template>
