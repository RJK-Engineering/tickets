<script setup lang="ts">
import { categoryStore } from 'domains/categories/store'
import { computed } from 'vue'
import { sortBy } from 'helpers/sort'

const props = defineProps(['categories'])
const categories = <Array<number>>props.categories

categoryStore.actions.getAll()
const allCategories = computed(() => sortBy(categoryStore.getters.all.value, 'name'))

//FIXME: this is ugly
interface Index {[id: number]: true}
const categoryIndex: Index = {}
categories.forEach(categoryId => categoryIndex[categoryId] = true)

const updateCategoryList = (e: Event) => {
    if (!e.target) return;
    if (e.target.checked) {
        categories.push(Number(e.target.value))
    } else {
        categories.splice(categories.indexOf(Number(e.target.value)), 1)
    }
}
</script>

<template>
<ul>
    <li v-for="category in allCategories">
        <input
            type="checkbox"
            :id="'category_' + category.id"
            :value="category.id"
            :checked="categoryIndex[category.id]"
            @click="updateCategoryList"
        />
        <label :for="'category_' + category.id">{{ category.name }}</label>
    </li>
</ul>
</template>
