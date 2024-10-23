// import {Credentials} from './types';
// import {PROJECT_DOMAIN_NAME} from 'domains/projects';
// import {computed, ref} from 'vue';
// import {getRequest, postRequest} from 'services/http';

// const loggedInUser = ref<User | null>(null);

// export const isLoggedIn = computed(() => loggedInUser.value !== null);
// export const getLoggedInUser = computed(() => loggedInUser.value);

// export const login = async (credentials: Credentials) => {
//     const {data} = await postRequest('login', credentials);
//     if (!data) return;
//     loggedInUser.value = data.user;
// };

// export const logout = async () => {
//     await getRequest('logout');
//     loggedInUser.value = null;
// };

// export const me = async () => {
//     const {data} = await getRequest('me');
//     if (!data) return;
//     loggedInUser.value = data;
// };

// export const goToLoginPage = () => goToRoute('Login', undefined);

// registerBeforeRouteMiddleware(({meta}) => {
//     if (!isLoggedIn.value && meta?.auth) {
//         goToLoginPage();
//         return true;
//     }
//     if (isLoggedIn.value && !meta?.canSeeWhenLoggedIn) {
//         goToOverviewPage(PROJECT_DOMAIN_NAME);
//         return true;
//     }
//     return false;
// });
