<script setup lang="ts">
import { categoryStore } from 'domains/categories/store'
import { computed } from 'vue'
import { sortBy } from 'helpers/sort'

const props = defineProps(['categories'])
const categories = <Array<number>>props.categories

//FIXME: this is ugly
interface Index {[id: number]: true}
const categoryIndex: Index = {}
categories.forEach(categoryId => categoryIndex[categoryId] = true)

categoryStore.actions.getAll()
const allCategories = computed(() => sortBy(categoryStore.getters.all.value, 'name'))
</script>

<template>
<ul>
    <li v-for="category in allCategories">
        <input type="checkbox" :id="category.id" :value="category.id" :checked="categoryIndex[category.id]" />
        <label :for="category.id">{{ category.name }}</label>
    </li>
</ul>
</template>
