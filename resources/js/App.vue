<script setup>
import { isLoggedIn } from 'services/auth';
import AppContainer from './components/AppContainer.vue';
import Nav from './components/Nav.vue';
</script>

<template>
    <h1>Tickets!</h1>
    <AppContainer>
        <Nav v-if="isLoggedIn" />
        <main>
            <RouterView />
        </main> 
    </AppContainer>
</template>

<!-- <p v-if="$route"><strong>Current route path:</strong> {{ $route.fullPath }}</p>
<nav>
    <RouterLink :to="{ name: 'tickets' }">Tickets</RouterLink>
    | <a href="/me">Me</a>
</nav>
-->
