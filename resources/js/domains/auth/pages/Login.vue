<script setup lang="ts">
import LoginForm from '../components/LoginForm.vue'
import { login } from 'services/auth'
</script>

<template>
	<LoginForm @submit="login"/>
</template>
