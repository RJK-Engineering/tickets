import { createOverviewRoute, createShowRoute, createCreateRoute, createEditRoute } from "services/router/factory"
import { TICKETS_DOMAIN_NAME } from "."
import type {Meta} from "services/router/types"

import Overview from "./pages/Overview.vue"
import Create from "./pages/Create.vue"
import Edit from "./pages/Edit.vue"

export const ticketRoutes = [
    createOverviewRoute(TICKETS_DOMAIN_NAME, Overview, <Meta>{auth: false}),
    // createShowRoute(TICKETS_DOMAIN_NAME, Show, <Meta>{auth: false}),
    createCreateRoute(TICKETS_DOMAIN_NAME, Create, <Meta>{auth: false}),
    createEditRoute(TICKETS_DOMAIN_NAME, Edit, <Meta>{auth: false}),
]
