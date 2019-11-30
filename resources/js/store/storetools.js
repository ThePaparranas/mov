import { mapState, mapGetters, mapActions } from 'vuex'

// Computed
export const userComputed = {
  ...mapState({ user: 'user' })
}

export const localSettingsComputed = {
  ...mapState({ localSettings: 'localStorageItems' })
}

export const isWorking = {
  ...mapState({ working: 'working' })
}

export const userIsAdmin = {
  ...mapState({ isAdmin: state => state.user.isAdmin })
}

// Methods
export const authMethods = {
  ...mapActions(['unsetUser', 'setUser'])
}

export const appMethods = {
  ...mapActions(['setApp'])
}
