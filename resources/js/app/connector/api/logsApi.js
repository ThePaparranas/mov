import http from 'axios'
import { frontApi, showRequestError } from './Api'

const logsBaseUri = `${frontApi}/logs`

const logsApi = {
  async index () {
    try {
      const r = await http.get(logsBaseUri)
      return Promise.resolve(r.data)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async get (log) {
    try {
      const r = await http.get(`${logsBaseUri}/${log}`)
      return Promise.resolve(r.data)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async delete (log) {
    try {
      await http.delete(`${logsBaseUri}/${log}`)
      return Promise.resolve(true)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async deleteAll () {
    try {
      await http.delete(`${logsBaseUri}/delete-all`)
      return Promise.resolve(true)
    } catch (e) {
      return showRequestError(e)
    }
  }
}

export default logsApi
