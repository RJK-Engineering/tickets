import { authRoutes } from "domains/auth/routes"
import { categoryRoutes } from "domains/categories/routes"
import { ticketRoutes } from "domains/tickets/routes"
import { userRoutes } from "domains/users/routes"
import Routes from "../components/Routes.vue"

export const routes = [
    ...authRoutes,
    ...categoryRoutes,
    ...ticketRoutes,
    // ...userRoutes,
    {
        path: '/routes',
        name: 'routes',
        component: Routes,
        meta: {auth: true, canSeeWhenLoggedIn: true}
    }
]
