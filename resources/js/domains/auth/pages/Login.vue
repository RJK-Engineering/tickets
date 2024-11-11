<script setup lang="ts">
import { LoginCredentials } from 'services/auth/types'
import LoginForm from '../components/LoginForm.vue'
import { login } from 'services/auth'

const submit = (credentials: LoginCredentials) => {
	login(credentials)
}
</script>

<template>
	<LoginForm @submit="submit"/>
</template>
