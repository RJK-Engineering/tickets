import { createOverviewRoute, createShowRoute, createCreateRoute, createEditRoute } from "services/router/factory"
import { CATEGORIES_DOMAIN_NAME } from "."
import type {Meta} from "services/router/types"

import Overview from "./pages/Overview.vue"
import Create from "./pages/Create.vue"
import Edit from "./pages/Edit.vue"

export const categoryRoutes = [
    createOverviewRoute(CATEGORIES_DOMAIN_NAME, Overview),
    // createShowRoute(CATEGORIES_DOMAIN_NAME, Show),
    createCreateRoute(CATEGORIES_DOMAIN_NAME, Create),
    createEditRoute(CATEGORIES_DOMAIN_NAME, Edit),
]
