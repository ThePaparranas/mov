import { mapState, mapGetters, mapActions } from 'vuex'

// Computed
export const userData = {
  ...mapState({ user: 'user', userIsAdmin: state => state.user.isAdmin })
}

export const localSettingsComputed = {
  ...mapState({ localSettings: 'localStorageItems' })
}

export const isWorking = {
  ...mapState({ working: 'working' })
}

export const userIsAdmin = {
  ...mapState({ userIsAdmin: state => state.user.isAdmin })
}

// Methods
export const authMethods = {
  ...mapActions(['unsetUser', 'setUser'])
}

export const appMethods = {
  ...mapActions(['setApp'])
}
