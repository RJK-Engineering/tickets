import { ComputedRef } from 'vue'
import { storeModuleFactory } from 'services/store/storeModuleFactory'
import { Ticket } from './types'

const ticketStore = storeModuleFactory('tickets')

export const getTickets = () => {
    ticketStore.actions.getAll()
    return ticketStore.getters.all
}

export const getTicket = (id: number) => ticketStore.getters.byId(id) as ComputedRef<Ticket>
export const createTicket = (ticket: Ticket) => ticketStore.actions.create(ticket)
export const updateTicket = (ticket: Ticket) => ticketStore.actions.update(ticket)
export const removeTicket = (ticket: Ticket) => ticketStore.actions.remove(ticket)
