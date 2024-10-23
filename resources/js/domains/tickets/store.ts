import { TICKETS_DOMAIN_NAME } from "."
import { Ticket } from "./types"
import { storeModuleFactory } from "services/store"

export const store = storeModuleFactory<Ticket>(TICKETS_DOMAIN_NAME)

// export const store = {
//     getters: baseTicketStore.getters,
//     setters: baseTicketStore.setters,
//     actions: {
//         ...baseTicketStore.actions,
