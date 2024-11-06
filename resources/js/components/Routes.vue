<template>
<table>
    <tbody>
        <tr v-for="route in $router.getRoutes()"><td>{{ route.name }}</td><td>{{ route.path }}</td></tr>
    </tbody>
</table>
</template>
