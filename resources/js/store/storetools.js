import { mapState, mapGetters, mapActions } from 'vuex'

// Computed
export const userComputed = {
  ...mapState({ user: 'user' })
}

export const localSettingsComputed = {
  ...mapState({ localSettings: 'localStorageItems' })
}

// Methods
export const authMethods = {
  ...mapActions(['unsetUser', 'setUser'])
}

export const appMethods = {
  ...mapActions(['setApp'])
}
