<script setup lang="ts">
// import axios from 'axios';
import { LoginCredentials } from 'services/auth/types'
import LoginForm from '../components/LoginForm.vue'
// import { goToRoute } from '../../../services/router'
import { login } from 'services/auth'

const submit = (credentials: LoginCredentials) => {
	login(credentials)
	// axios.post('/api/login', user)
	// goToRoute('home')
}
</script>

<template>
	<LoginForm @submit="submit"/>
	<a href="/api/logout">Log Out</a>
</template>
