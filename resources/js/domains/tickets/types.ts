import { Category } from "../categories/types"

export interface Ticket extends StoredObject {
    createdBy: number;
    assignedTo: number;
    createdAt: string;
    updatedAt: string;
    title: string;
    status: string;

    categories: Array<Category>;
}
