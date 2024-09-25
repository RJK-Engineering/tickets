<script setup lang="ts">
import axios from 'axios';
import LoginForm from '../components/LoginForm.vue'
// import { goToRoute } from '../../../services/router'
// import { login } from 'services/auth';

const submit = (user) => {
	axios.post('/api/login', user)
	// goToRoute('home')
}
const check = () => {
	axios.get('/api/user')
}
</script>

<template>
	<LoginForm @submit="submit"/>
	<button @click="check">CHECK</button>
	<a href="/api/logout">Log Out</a>
</template>
