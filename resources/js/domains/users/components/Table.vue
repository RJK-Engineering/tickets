<script setup lang="ts">
import { goToEditPage, goToShowPage } from 'services/router'
import { User } from '../types'
import { userStore } from '../store'

defineProps<{users: User[]}>()

function removeUser(user: User) {
    userStore.actions.delete(user.id)
}
function edit(user: User) {
    goToEditPage('users', user.id)
}
function show(user: User) {
    goToShowPage('users', user.id)
}
</script>

<template>
<table>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="user in users">
            <td class="userFirstName">{{ user.firstName }}</td>
            <td class="userLastName">{{ user.lastName }}</td>
            <td class="userEmail">{{ user.email }}</td>
            <td class="userRole">{{ user.role }}</td>
            <td class="userPhone">{{ user.phone }}</td>

            <td class="editUser"><button @click="edit(user)">Edit</button></td>
            <td class="deleteUser"><button @click="removeUser(user)">Delete</button></td>
        </tr>
    </tbody>
</table>
</template>
