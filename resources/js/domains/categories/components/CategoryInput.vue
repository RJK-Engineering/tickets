<script setup lang="ts">
import { store } from 'domains/categories/store'
import { computed } from 'vue'
import { sortBy } from 'helpers/sort'
import { Category } from '../types';

const props = defineProps(['categories'])
const categories = <Array<Category>>props.categories

interface Index {[id: number]: true}
const categoryIndex: Index = {}
categories.forEach((category) => categoryIndex[category.id] = true)

const allCategories = computed(() => sortBy(store.getters.all.value, 'name'))
store.actions.getAll()
</script>

<template>
<ul>
    <li v-for="category in allCategories">
        <input type="checkbox" :id="category.id" :value="category.id" :checked="categoryIndex[category.id]" />
        <label :for="category.id">{{ category.name }}</label>
    </li>
</ul>
</template>
