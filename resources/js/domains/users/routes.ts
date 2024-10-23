import {createOverviewRoute} from 'services/router/factory'
import { USER_DOMAIN_NAME } from '.'

import OverviewPage from './pages/Overview.vue'

export const routes = [
    createOverviewRoute(USER_DOMAIN_NAME, OverviewPage)
]
