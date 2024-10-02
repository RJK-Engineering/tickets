import { createOverviewRoute } from "services/router/factory";
import type {Meta} from "services/router/types";
import Overview from "./pages/Overview.vue";
import { Ticket } from "./types";
import { storeModuleFactory } from "services/store";

export const TICKETS_DOMAIN_NAME = 'tickets';

export const ticketRoutes = [createOverviewRoute(TICKETS_DOMAIN_NAME, Overview, <Meta>{auth: false})];

export const ticketStore = storeModuleFactory<Ticket>(TICKETS_DOMAIN_NAME);
