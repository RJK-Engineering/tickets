import { routes as authRoutes } from "domains/auth/routes"
import { routes as categoryRoutes } from "domains/categories/routes"
import { routes as ticketRoutes } from "domains/tickets/routes"
import { routes as userRoutes } from "domains/users/routes"

export const routes = [
    ...authRoutes,
    ...categoryRoutes,
    ...ticketRoutes,
    // ...userRoutes,
]
