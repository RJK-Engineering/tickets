import axios from "axios";
import { postRequest } from "../../services/http";

export const login = (user) => {
    console.log(user)

    axios.get('/sanctum/csrf-cookie').then(response => {
        postRequest('/login', user)
        console.log("login")
    });
}
