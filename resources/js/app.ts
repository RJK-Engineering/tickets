import { addRoutes, useRouterInApp } from 'services/router';
import { checkIfLoggedIn } from 'services/auth';
import { createApp } from "vue"
import App from "./App.vue"

import { routes } from './routes';
addRoutes(routes);

const app = createApp(App);

try {
    await checkIfLoggedIn();
} catch (e) {
    console.error(e);
    // so we dont get stuck in an endless loop of refreshing and checking if logged in
} finally {
    useRouterInApp(app);
    app.mount('#app');
}
