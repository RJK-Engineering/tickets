import { authRoutes } from "domains/auth/routes"
import { categoryRoutes } from "domains/categories/routes"
import { ticketRoutes } from "domains/tickets/routes"
import { userRoutes } from "domains/users/routes"

export const routes = [
    ...authRoutes,
    ...categoryRoutes,
    ...ticketRoutes,
    // ...userRoutes,
]
