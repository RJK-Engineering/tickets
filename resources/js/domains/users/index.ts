import {setTranslation} from 'services/translation'

export const USER_DOMAIN_NAME = 'users'

setTranslation(USER_DOMAIN_NAME, {
    singular: 'gebruiker',
    plural: 'gebruikers',
})
