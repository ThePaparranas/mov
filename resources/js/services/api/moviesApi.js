import http from 'axios'
import { apiBase, showRequestError } from './Api'

const moviesBaseUri = `${apiBase}/movies`

const moviesApi = {
  index () {
    return http.get(moviesBaseUri)
      .then(r => Promise.resolve(r.data))
      .catch(e => showRequestError(e))
  },

  genres () {
    return http.get(moviesBaseUri + '/genres')
      .then(r => Promise.resolve(r.data))
      .catch(e => showRequestError(e))
  }
}

export default moviesApi
