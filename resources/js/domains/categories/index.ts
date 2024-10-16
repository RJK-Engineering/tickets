import { createOverviewRoute, createShowRoute, createCreateRoute, createEditRoute } from "services/router/factory";
import type {Meta} from "services/router/types";
import Overview from "./pages/Overview.vue";
import Create from "./pages/Create.vue";
import Edit from "./pages/Edit.vue";
import { Category } from "./types";
import { storeModuleFactory } from "services/store";

export const CATEGORIES_DOMAIN_NAME = 'categories';

export const categoryRoutes = [
    createOverviewRoute(CATEGORIES_DOMAIN_NAME, Overview, <Meta>{auth: false}),
    // createShowRoute(CATEGORIES_DOMAIN_NAME, Show, <Meta>{auth: false}),
    createCreateRoute(CATEGORIES_DOMAIN_NAME, Create, <Meta>{auth: false}),
    createEditRoute(CATEGORIES_DOMAIN_NAME, Edit, <Meta>{auth: false}),
];

export const categoryStore = storeModuleFactory<Category>(CATEGORIES_DOMAIN_NAME);
