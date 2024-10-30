import { CATEGORIES_DOMAIN_NAME } from "."
import { Category } from "./types"
import { storeModuleFactory } from "services/store"

export const categoryStore = storeModuleFactory<Category>(CATEGORIES_DOMAIN_NAME)
