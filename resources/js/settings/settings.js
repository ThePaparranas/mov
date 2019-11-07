import Vue from 'vue'
import Vuex from 'vuex'
import VueRouter from 'vue-router'
import localStorageDefaultItems from './localStorageDefaults'

/** The default http status (verb) */
const defaultHttpStatus = 'idle'

/** File name for local storage object */
const localStorageObjectName = 'app_storage'

/** Where to store collapsible states in Vuex store */
const localStorageCollapsibleStates = 'localStorageItems.collapsible'

/** Initialize Local Storage Object */
if (localStorage.getItem(localStorageObjectName) === null) {
  localStorage.setItem(localStorageObjectName, JSON.stringify(localStorageDefaultItems))
}

/** Versions */
const vueVer = Vue.version
const vueRouterVer = VueRouter.version
const vuexVer = Vuex.version

export {
  defaultHttpStatus,
  localStorageObjectName,
  localStorageCollapsibleStates,
  vueVer,
  vueRouterVer,
  vuexVer
}
