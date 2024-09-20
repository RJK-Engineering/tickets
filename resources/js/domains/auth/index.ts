import Login from "./pages/Login.vue";

export const authRoutes = [{
    path: '/',
    name: 'Login',
    component: Login,
    meta: {auth: false, canSeeWhenLoggedIn: false},
}];
