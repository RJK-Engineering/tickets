<script setup lang="ts">
import { categoryStore } from '../store'

const props = defineProps(['categories'])
const categorIds = props.categories

const categorieNames = categorIds
    .map((id: number) => categoryStore.getters.byId(id).value?.name)
    .filter((e: string) => e != undefined)
</script>

<template>
{{ categorieNames.sort().join(', ') }}
</template>
