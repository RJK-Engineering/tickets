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
    | <RouterLink :to="{ name: 'categories.create' }">New Category</RouterLink>
    <!-- | <RouterLink :to="{ name: 'users.overview' }">Users</RouterLink> -->
    <!-- | <a href="/me">Me</a> -->
    | <RouterLink :to="{ name: 'users.overview' }">Users</RouterLink>
    | <RouterLink :to="{ name: 'routes' }">Routes</RouterLink>
    | <a class="link" @click.prevent="submitLogout">Log Out</a>
</nav>
</template>

<style>
.link {
    cursor: pointer;
}
</style>
