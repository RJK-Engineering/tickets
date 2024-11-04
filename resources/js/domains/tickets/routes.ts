import { createOverviewRoute, createShowRoute, createCreateRoute, createEditRoute } from "services/router/factory"
import { TICKETS_DOMAIN_NAME } from "."

import Overview from "./pages/Overview.vue"
import Create from "./pages/Create.vue"
import Edit from "./pages/Edit.vue"

export const ticketRoutes = [
    createOverviewRoute(TICKETS_DOMAIN_NAME, Overview),
    // createShowRoute(TICKETS_DOMAIN_NAME, Show),
    createCreateRoute(TICKETS_DOMAIN_NAME, Create),
    createEditRoute(TICKETS_DOMAIN_NAME, Edit),
]
