import http from 'axios'
import { frontApi, showRequestError } from './Api'

const logArchivesApi = {
  async index () {
    try {
      const r = await http.get(`${frontApi}/log-archives`)
      return Promise.resolve(r.data.archives)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async archive (log) {
    try {
      await http.patch(`${frontApi}/log-archives/${log}`)
      return Promise.resolve(true)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async master () {
    try {
      await http.post(`${frontApi}/log-archives`)
      return Promise.resolve(true)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async delete (name) {
    try {
      await http.delete(`${frontApi}/log-archives/${name}`)
      return Promise.resolve(true)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async deleteAll () {
    try {
      await http.delete(`${frontApi}/log-archives/delete-all`)
      return Promise.resolve(true)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async deleteMaster () {
    try {
      await http.delete(`${frontApi}/log-archives-master`)
      return Promise.resolve(true)
    } catch (e) {
      return showRequestError(e)
    }
  },

  async masterExists () {
    try {
      const r = await http.get(`${frontApi}/log-archives-master-exists`)
      return Promise.resolve(r.data)
    } catch (e) {
      return showRequestError(e)
    }
  }
}

export default logArchivesApi
