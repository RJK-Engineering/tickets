interface StoredObject {
    id: number,
}
export interface Ticket extends StoredObject {
    createdBy: string,
    assignedTo: string,
    createdAt: string,
    updatedAt: string,
    title: string,
    status: string,
}
