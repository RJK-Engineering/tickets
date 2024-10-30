<script setup lang="ts">
import { goToEditPage, goToShowPage } from 'services/router'
import { Category } from '../types'
import { categoryStore } from '../store'

defineProps<{categories: Category[]}>()

function removeCategory(category: Category) {
    categoryStore.actions.delete(category.id)
}
function edit(category: Category) {
    goToEditPage('categories', category.id)
}
function show(category: Category) {
    goToShowPage('categories', category.id)
}
</script>

<template>
<table id="categories">
    <tbody>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <tr v-for="category in categories">
            <td class="categoryId">{{ category.id }}</td>
            <td class="categoryName">{{ category.name }}</td>

            <td class="editCategory"><button @click="edit(category)">Edit</button></td>
            <td class="deleteCategory"><button @click="removeCategory(category)">Delete</button></td>
        </tr>
    </tbody>
</table>
</template>
