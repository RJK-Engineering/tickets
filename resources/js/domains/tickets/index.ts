import { createOverviewRoute, createShowRoute, createCreateRoute, createEditRoute } from "services/router/factory";
import type {Meta} from "services/router/types";
import Overview from "./pages/Overview.vue";
import Create from "./pages/Create.vue";
import Edit from "./pages/Edit.vue";
import { Ticket } from "./types";
import { storeModuleFactory } from "services/store";

export const TICKETS_DOMAIN_NAME = 'tickets';

export const ticketRoutes = [
    createOverviewRoute(TICKETS_DOMAIN_NAME, Overview, <Meta>{auth: false}),
    // createShowRoute(TICKETS_DOMAIN_NAME, Show, <Meta>{auth: false}),
    createCreateRoute(TICKETS_DOMAIN_NAME, Create, <Meta>{auth: false}),
    createEditRoute(TICKETS_DOMAIN_NAME, Edit, <Meta>{auth: false}),
];

export const ticketStore = storeModuleFactory<Ticket>(TICKETS_DOMAIN_NAME);

// export const ticketStore = {
//     getters: baseTicketStore.getters,
//     setters: baseTicketStore.setters,
//     actions: {
//         ...baseTicketStore.actions,
