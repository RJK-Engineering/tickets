<script setup>
import { isLoggedIn } from 'services/auth';
import AppContainer from './components/AppContainer.vue';
import Nav from './components/Nav.vue';
</script>

<template>
    <AppContainer>
        <h1>Tickets!</h1>
        <Nav v-if="isLoggedIn" />
        <main>
            <RouterView />
        </main>
    </AppContainer>
</template>
