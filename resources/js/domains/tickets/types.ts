interface StoredObject {
    id: number,
}
export interface Ticket extends StoredObject {
    created_by: string,
    assigned_to: string,
    created_at: string,
    updated_at: string,
    title: string,
    status: string,
}
