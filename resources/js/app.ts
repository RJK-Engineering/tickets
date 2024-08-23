import { createApp } from "vue"
import App from "../App.vue"
import { createMemoryHistory, createRouter } from "vue-router"
import Login from "./domains/auth/pages/Login.vue"

const router = createRouter({
    history: createMemoryHistory(),
    routes: [
        { path: '/', redirect: { name: 'login' } },
        { path: '/login', component: Login, name: 'login' },
    ]
})

createApp(App)
.use(router)
.mount("#app")
