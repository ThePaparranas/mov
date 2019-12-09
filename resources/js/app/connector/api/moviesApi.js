import http from 'axios'
import { frontApi, showRequestError } from './Api'

const moviesBaseUri = `${frontApi}/movies`

const moviesApi = {
  async index () {
    try {
      const r = await http.get(moviesBaseUri)
      return await Promise.resolve(r.data)
    } catch (e) {
      showRequestError(e)
    }
  },

  async genres () {
    try {
      const r = await http.get(moviesBaseUri + '/genres')
      return await Promise.resolve(r.data)
    } catch (e) {
      showRequestError(e)
    }
  }
}

export default moviesApi
