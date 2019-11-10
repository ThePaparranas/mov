import http from 'axios'
import { showRequestError } from './Api'

const authApi = {
  async logout () {
    try {
      await http.post('/logout')
      return Promise.resolve(true)
    } catch (e) {
      return showRequestError(e)
    }
  }
}

export default authApi
