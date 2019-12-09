const mutations = {
  SET_USER (state, user) {
    state.user = user
  },

  SET_APP (state, obj) {
    state.appName = obj.appName
    state.baseDir = obj.baseDir
  },

  SET_MOVIES (state, movies) {
    state.movies = movies
  },

  SET_WORKING (state, boolVal) {
    state.working = boolVal
  },

  SET_GENRES (state, arr) {
    state.genres = arr
  }
}

export default mutations
