import { addRoutes, useRouterInApp } from './services/router';
import { createApp } from "vue"
import App from "./App.vue"

import { routes } from './routes';
addRoutes(routes);

const app = createApp(App);
app.mount("#app")
