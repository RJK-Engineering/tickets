<script setup>
import { isLoggedIn } from 'services/auth';
import AppContainer from './components/AppContainer.vue';
import Nav from './components/Nav.vue';
</script>

<template>
    <h1>Tickets!</h1>
    <nav>
        <div v-if="$route">
            <p><strong>Current route path:</strong> {{ $route.fullPath }}</p>
            <RouterLink :to="{ name: 'tickets.overview' }">Tickets</RouterLink>
            | <RouterLink :to="{ name: 'tickets.create' }">New Ticket</RouterLink>
            | <RouterLink :to="{ name: 'categories.overview' }">Categories</RouterLink>
            <!-- | <RouterLink :to="{ name: 'users.overview' }">Users</RouterLink> -->
            | <a href="/me">Me</a>
        </div>
    </nav>
    <AppContainer>
        <Nav v-if="isLoggedIn" />
        <main>
            <RouterView />
        </main>
    </AppContainer>
</template>
