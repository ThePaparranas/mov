import http from 'axios'
import { apiBase, showRequestError } from './Api'

const modulesBaseUri = `${apiBase}/modules`

const modulesApi = {
  index () {
    return http.get(modulesBaseUri)
      .then(r => Promise.resolve(r.data.modules))
      .catch(e => showRequestError(e))
  },

  get (module) {
    return http.get(`${modulesBaseUri}/${module}`)
      .then(r => Promise.resolve(r.data.module))
      .catch(e => showRequestError(e))
  },

  store (payload) {
    return http.post(`${modulesBaseUri}`, payload)
      .then(() => Promise.resolve(true))
      .catch(e => showRequestError(e))
  },

  update (module, payload) {
    return http.patch(`${modulesBaseUri}/${module}`, payload)
      .then(r => Promise.resolve(r.data.module))
      .catch(e => showRequestError(e))
  },

  delete (module) {
    return http.delete(`${modulesBaseUri}/${module}`)
      .then(() => Promise.resolve(true))
      .catch(e => showRequestError(e))
  },

  deleteOrphans (ids) {
    return http.post(`${modulesBaseUri}/delete-orphans`, { _method: 'DELETE', ids })
      .then(() => Promise.resolve(true))
      .catch(e => showRequestError(e))
  },

  check (name, id) {
    let payload = {
      name
    }

    if (id !== undefined || !id) {
      payload.id = id
    }

    return http.patch(`${apiBase}modules/check`, payload)
      .then(() => Promise.resolve(true))
      .catch(e => Promise.reject(e.response.data))
  },

  reorder (payload) {
    return http.patch(`${apiBase}modules/reorder`, payload)
      .then(r => Promise.resolve(r.data.modules))
      .catch(e => showRequestError(e))
  }
}

export default modulesApi
