const mutations = {
  SET_USER (state, user) {
    state.user = user
  },

  SET_APP (state, setts) {
    state.appName = setts.appName
    state.baseDir = setts.baseDir
  }
}

export default mutations
