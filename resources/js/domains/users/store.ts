import {storeModuleFactory} from 'services/store'
import {User} from './types'
import { USER_DOMAIN_NAME } from '.'

export const userStore = storeModuleFactory<User>(USER_DOMAIN_NAME)
