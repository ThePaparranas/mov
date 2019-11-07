import http from 'axios'
import { apiBase, showRequestError } from './Api'

const logArchivesApi = {
  async index () {
    try {
      const r = await http.get(`${apiBase}/log-archives`)
      return Promise.resolve(r.data.archives)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async archive (log) {
    try {
      await http.patch(`${apiBase}/log-archives/${log}`)
      return Promise.resolve(true)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async master () {
    try {
      await http.post(`${apiBase}/log-archives`)
      return Promise.resolve(true)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async delete (name) {
    try {
      await http.delete(`${apiBase}/log-archives/${name}`)
      return Promise.resolve(true)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async deleteAll () {
    try {
      await http.delete(`${apiBase}/log-archives/delete-all`)
      return Promise.resolve(true)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async deleteMaster () {
    try {
      await http.delete(`${apiBase}/log-archives-master`)
      return Promise.resolve(true)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async masterExists () {
    try {
      const r = await http.get(`${apiBase}/log-archives-master-exists`)
      return Promise.resolve(r.data)
    } catch (e) {
      return showRequestError(e)
    }
  }
}

export default logArchivesApi
