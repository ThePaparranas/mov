import http from 'axios'
import { apiBase, showRequestError } from './Api'

const mediaBaseUri = `${apiBase}/media`

const mediaApi = {
  async index () {
    try {
      const r = await http.get(`${mediaBaseUri}`)
      return Promise.resolve(r.data.media)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async images () {
    try {
      const r = await http.get(`${mediaBaseUri}/images`)
      return Promise.resolve(r.data.images)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async get (id) {
    try {
      const r = await http.get(`${mediaBaseUri}/${id}`)
      return Promise.resolve(r.data.medium)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async delete (file) {
    let payload = {
      _method: 'DELETE'
    }

    let id = typeof file === 'number' ? file : 0

    if (id === 0) {
      payload.file = file
    }

    try {
      await http.post(`${mediaBaseUri}/${id}`, payload)
      return Promise.resolve(true)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async endpoint () {
    try {
      const r = await http.get(`${mediaBaseUri}/url`)
      return Promise.resolve(r.data.url)
    } catch (e) {
      return showRequestError(e)
    }
  }
}

export default mediaApi
