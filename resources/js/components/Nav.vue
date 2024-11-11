<script setup lang="ts">
import {goToLoginPage, logout} from 'services/auth'

const submitLogout = () => {
    try {
        logout()
    } finally {
        goToLoginPage()
    }
}
</script>

<template>
<nav>
    <p><strong>Current route path:</strong> {{ $route.fullPath }}</p>
    <RouterLink :to="{ name: 'tickets.overview' }">Tickets</RouterLink>
    | <RouterLink :to="{ name: 'tickets.create' }">New Ticket</RouterLink>
    | <RouterLink :to="{ name: 'categories.overview' }">Categories</RouterLink>
    <!-- | <RouterLink :to="{ name: 'users.overview' }">Users</RouterLink> -->
    <!-- | <a href="/me">Me</a> -->
    | <RouterLink :to="{ name: 'routes' }">Routes</RouterLink>
    | <a class="link" @click.prevent="submitLogout">Log Out</a>
</nav>
</template>

<style>
.link {
    cursor: pointer;
}
</style>

<!--
import {activeStatus, projectStore} from 'domains/projects'
import {computed} from 'vue'
import {handStore} from 'domains/hands'

const PERCENTAGE = 100

projectStore.actions.getAll()
handStore.actions.getAll()

const projects = projectStore.getters.all

const activeProjects = computed(() => projects.value.filter(({status}) => status === activeStatus?.id))

const hoursActiveProjects = computed(() => {
    const totalHands = activeProjects.value.map(({hands}) => hands).flat()

    return Math.round(
        totalHands.reduce(
            (acc, curr) => acc + (curr.hours / PERCENTAGE) * handStore.getters.byId(curr.handId).value?.efficiency,
            0,
        ),
    )
})

const MONTHS = 12
const WEEKS = 12

const totalEfficientHoursNeeded = computed(() =>
    Math.round(
        activeProjects.value.reduce((acc, {hours, totalWeeks, endDate}) => {
            if (endDate) return acc + hours / totalWeeks
            if (!endDate) return acc + (hours * MONTHS) / WEEKS
            return acc
        }, 0),
    ),
)

const totalEfficientHoursHands = computed(() => {
    const totalActiveHands = activeProjects.value.map(({hands}) => hands).flat()
    const uniqueHands = [...new Set(totalActiveHands.map(hand => hand.handId))]
    return uniqueHands.reduce((acc, next) => acc + +handStore.getters.byId(next).value?.hours, 0)
})

-->
