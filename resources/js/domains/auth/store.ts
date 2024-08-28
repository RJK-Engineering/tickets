import axios from "axios";

export const login = (user) => {
    console.log(user)

    axios.get('/sanctum/csrf-cookie').then(response => {
        axios.post('/login', user)
        console.log("login")
    });
}
