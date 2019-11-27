import http from 'axios'
import { frontApi, showRequestError } from './Api'

const usersApiUri = `${frontApi}/users`

const usersApi = {
  async update (id, payload) {
    try {
      const r = await http.patch(`${usersApiUri}/${id}`, payload)
      return Promise.resolve(r.data)
    } catch (e) {
      if (e.response && e.response.status === 422) {
        return Promise.reject(e.response.data)
      } else {
        showRequestError(e)
      }
    }
  }
}

export default usersApi
