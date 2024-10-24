import { Category } from "../categories/types";

interface StoredObject {
    id: number;
}
export interface Ticket extends StoredObject {
    createdBy: number;
    assignedTo: number;
    createdAt: string;
    updatedAt: string;
    title: string;
    status: string;

    categories: Array<Category>;
}
