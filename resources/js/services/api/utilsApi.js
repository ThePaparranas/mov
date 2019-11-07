import http from 'axios'
import { apiBase, showRequestError } from './Api'

const utilBaseUri = `${apiBase}/util`

const utilApi = {
  async execCacheArtisanCommand (payload) {
    try {
      const r = await http.post(`${utilBaseUri}/cache/execute_command`, payload)
      return Promise.resolve(r.data)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async getCaches () {
    try {
      const r = await http.get(`${utilBaseUri}/cache/get`)
      return Promise.resolve(r.data)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async getSysServerInfo () {
    try {
      const r = await http.get(`${utilBaseUri}/system/info`)
      return Promise.resolve(r.data)
    } catch (e) {
      return showRequestError(e)
    }
  }
}

export default utilApi
