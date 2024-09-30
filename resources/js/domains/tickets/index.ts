import { createOverviewRoute } from "services/router/factory";
import Overview from "./pages/Overview.vue";
import { Ticket } from "./types";
import { storeModuleFactory } from "services/store";

export const TICKETS_DOMAIN_NAME = 'tickets';

export const ticketRoutes = [createOverviewRoute(TICKETS_DOMAIN_NAME, Overview)];

export const baseTeamStore = storeModuleFactory<Ticket>(TICKETS_DOMAIN_NAME);
