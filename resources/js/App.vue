<template>
    <h1>Tickets!</h1>
    <p><strong>Current route path:</strong> {{ $route.fullPath }}</p>
    <nav>
        <!-- <RouterLink :to="{ name: 'tickets' }">Tickets</RouterLink> -->
        | <a href="/me">Me</a>
    </nav>
    <main>
        <RouterView />
    </main>
</template>
