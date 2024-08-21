import { createApp } from "vue"
import App from "../App.vue"
import { createMemoryHistory, createRouter } from "vue-router"

const router = createRouter({
    history: createMemoryHistory(),
    routes: [
        { path: '/', redirect: { name: 'tickets' } },
    ]
})

createApp(App)
.use(router)
.mount("#app")
