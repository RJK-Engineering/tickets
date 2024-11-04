import Login from './pages/Login.vue'

export const authRoutes = [{
    path: '/',
    name: 'login',
    component: Login,
    meta: {auth: false, canSeeWhenLoggedIn: false},
}];
