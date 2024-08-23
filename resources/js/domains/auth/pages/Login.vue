<script setup>
import LoginForm from '../components/LoginForm.vue'
import { login } from '../store'

const submit = (user) => {
	login(user)
	// goToRoute('home')
}
</script>

<template>
	<LoginForm @submit="submit"/>
</template>
