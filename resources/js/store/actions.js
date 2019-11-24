import moviesApi from '../services/api/moviesApi'

export const setUser = ({ commit }, user) => {
  commit('SET_USER', user)
}

export const unsetUser = ({ commit }) => {
  commit('SET_USER', {})
}

export const setApp = ({ commit }, setts) => {
  commit('SET_APP', setts)
}

export const setWorking = ({ commit }, val) => {
  commit('SET_WORKING', val)
}

export const setMovies = ({ state, commit }) => {
  if (state.movies.length || state.working) {
    return
  }

  commit('SET_WORKING', true)

  moviesApi.index()
    .then((data) => commit('SET_MOVIES', data))
    .finally(commit('SET_WORKING', false))
}

export const setGenres = ({ state, commit }) => {
  if (state.genres.length || state.working) {
    return
  }

  commit('SET_WORKING', true)

  moviesApi.genres()
    .then((data) => commit('SET_GENRES', data))
    .finally(commit('SET_WORKING', false))
}
