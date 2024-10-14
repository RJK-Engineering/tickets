import {createOverviewRoute} from 'services/router/factory';
import OverviewPage from './pages/Overview.vue';
import { USER_DOMAIN_NAME } from '.';

export const userRoutes = [createOverviewRoute(USER_DOMAIN_NAME, OverviewPage)]
