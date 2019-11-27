import http from 'axios'
import { frontApi, showRequestError } from './Api'

const pagesBaseUri = `${frontApi}/pages`

const pagesApi = {
  index () {
    return http.get(pagesBaseUri)
      .then(r => Promise.resolve(r.data.pages))
      .catch(e => showRequestError(e))
  },

  list () {
    return http.get(`${pagesBaseUri}/list`)
      .then(r => Promise.resolve(r.data.list))
      .catch(e => showRequestError(e))
  },

  get (page) {
    return http.get(`${pagesBaseUri}/${page}`)
      .then(r => Promise.resolve(r.data.page))
      .catch(e => showRequestError(e))
  },

  store (payload) {
    return http.post(`${pagesBaseUri}`, payload)
      .then(() => Promise.resolve(true))
      .catch(e => showRequestError(e))
  },

  update (page, payload) {
    return http.patch(`${pagesBaseUri}/${page}`, payload)
      .then(r => Promise.resolve(r.data.page))
      .catch(e => showRequestError(e))
  },

  delete (page) {
    return http.delete(`${pagesBaseUri}/${page}`)
      .then(() => Promise.resolve(true))
      .catch(e => showRequestError(e))
  },

  check (name, id) {
    let payload = { name }

    if (id !== undefined || !id) {
      payload.id = id
    }

    return http.patch(`${pagesBaseUri}/check`, payload)
      .then(() => Promise.resolve(true))
      .catch(e => Promise.reject(e.response.data))
  }
}

export default pagesApi
