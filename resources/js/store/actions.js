
export const setUser = ({ commit }, user) => {
  commit('SET_USER', user)
}

export const unsetUser = ({ commit }) => {
  commit('SET_USER', {})
}

export const setApp = ({ commit }, setts) => {
  commit('SET_APP', setts)
}
