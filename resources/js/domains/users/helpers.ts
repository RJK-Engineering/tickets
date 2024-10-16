import { userStore } from "./store"
import { User } from "./types"

export const formatUserId = (id: number) => {
	return formatUser(userStore.getters.byId(id).value)
}

export const formatUser = (user: User) => {
	if (!user) return ""
	return `${user.firstName} ${user.lastName}`
}
