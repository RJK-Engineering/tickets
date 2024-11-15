<script setup lang="ts">
// import {New, Updatable} from 'services/store/types'
import Table from '../components/Table.vue'
// import {User} from '../types'
import {computed, defineAsyncComponent, ref} from 'vue'
// import {confirmModal, formModal} from 'services/modal'
// import {farPaperPlane, fasEdit, fasPlus, fasTrash} from 'constants/icons'

import {sortBy} from 'helpers/sort'
// import {successToast} from 'services/toast'
import {userStore} from '../store'
// import Card from 'components/Card.vue'
// import FontAwesomeIcon from 'components/FontAwesomeIcon.vue'
// import PageContainer from 'components/PageContainer.vue'

userStore.actions.getAll()

// const newUser = ref<New<User>>({
//     firstName: '',
//     lastName: '',
//     email: '',
//     inviteToken: '',
// })

const users = computed(() => sortBy(userStore.getters.all.value, 'firstName'))

// const createCreateModal = () => {
//     formModal(
//         newUser.value,
//         defineAsyncComponent(() => import('../components/Form.vue')),
//         async (user: New<User>) => {
//             await userStore.actions.create(user)
//             successToast('Gebruiker uitgenodigd')
//         },
//     )
// }

// const createEditModal = (user: User) => {
//     formModal(
//         user,
//         defineAsyncComponent(() => import('../components/Form.vue')),
//         async (editedUser: Updatable<User>) => {
//             await userStore.actions.update(user.id, editedUser)
//             successToast('Gebruiker aangepast')
//         },
//     )
// }

// const removeUser = async (user: User) => {
//     const confirmed = await confirmModal(`Weet je zeker dat je "${user.firstName}" wilt verwijderen?`, 'Verwijderen')
//     if (!confirmed) return
//     userStore.actions.delete(user.id)
//     successToast('Gebruiker verwijderd')
// }
</script>

<template>
<Table :users="users" />
</template>
