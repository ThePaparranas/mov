import http from 'axios'
import { frontApi, showRequestError, createBlob, uuid } from './Api'

const downloadsApi = {
  async getRaw (log) {
    try {
      const r = await http.get(`${frontApi}/log-download/${log}`, { responseType: 'blob' })
      return createBlob(r.data, `${uuid()}.txt`)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async getArchived (log) {
    try {
      const r = await http.get(`${frontApi}/log-download-archive/${log}`, { responseType: 'blob' })
      return createBlob(r.data, `${uuid()}.zip`)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async getMaster () {
    try {
      const r = await http.get(`${frontApi}/log-download-master`, { responseType: 'blob' })
      return createBlob(r.data, `${uuid()}.zip`)
    } catch (e) {
      return showRequestError(e)
    }
  }
}

export default downloadsApi
