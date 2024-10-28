export interface User extends StoredObject {
    firstName: string;
    lastName: string;
    email: string;
    inviteToken: string;
}
