import http from 'axios'
import { frontApi, showRequestError } from './Api'

const newsBaseUri = `${frontApi}/news`

const newsApi = {
  index () {
    return http.get(newsBaseUri)
      .then(r => Promise.resolve(r.data))
      .catch(e => showRequestError(e))
  },

  categories () {
    return http.get(`${newsBaseUri}/categories`)
      .then(r => Promise.resolve(r.data))
      .catch(e => showRequestError(e))
  },

  getBySlug (slug) {
    return http.get(`${newsBaseUri}/slug/${slug}`)
      .then(r => Promise.resolve(r.data))
      .catch(e => showRequestError(e))
  }
}

export default newsApi
