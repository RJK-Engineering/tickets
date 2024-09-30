import { authRoutes } from "domains/auth";
import { ticketRoutes } from "domains/tickets";

export const routes = [
    ...authRoutes, 
    ...ticketRoutes,
]
