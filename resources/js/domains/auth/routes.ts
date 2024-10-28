// import {goToOverviewPage, goToRoute, registerBeforeRouteMiddleware} from 'services/router'
import Login from './pages/Login.vue'
// import Register from './pages/Register.vue'
// import RequestResetPassword from './pages/RequestResetPassword.vue'
// import ResetPassword from './pages/ResetPassword.vue'

export const authRoutes = [{
    path: '/',
    name: 'Login',
    component: Login,
    meta: {auth: false, canSeeWhenLoggedIn: false},
//     {
//         path: '/',
//         name: 'Login',
//         component: Login,
//         meta: {auth: false, canSeeWhenLoggedIn: false},
//     },
//     {
//         path: '/wachtwoord-vergeten/:token/:email',
//         name: 'resetPassword',
//         component: ResetPassword,
//         meta: {auth: false, canSeeWhenLoggedIn: false},
//     },
//     {
//         path: '/wachtwoord-vergeten',
//         name: 'forgotPassword',
//         component: RequestResetPassword,
//         meta: {auth: false, canSeeWhenLoggedIn: false},
//     },
//     {
//         path: '/registreren/:token',
//         name: 'register',
//         component: Register,
//         meta: {auth: false, canSeeWhenLoggedIn: false},
}];
