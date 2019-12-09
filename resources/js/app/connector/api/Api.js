import { showRequestError } from '../tools/request-errors'

const appHome = '/FrontApi'
const frontApi = `${appHome}`

function createBlob (blob, name = 'log.txt') {
  const downloadUrl = window.URL.createObjectURL(new Blob([blob]))
  const downloadLink = document.createElement('a')

  downloadLink.href = downloadUrl
  downloadLink.setAttribute('download', `laravel-log-${name}`)

  document.body.appendChild(downloadLink)

  downloadLink.click()

  return Promise.resolve(true)
}

function uuid () {
  return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
    const r = Math.random() * 16 | 0
    const v = c === 'x'
      ? r
      : (r & 0x3 | 0x8)
    return v.toString(16)
  })
}

function normalizePayloadMethod (payload, method, force = false) {
  if (force && payload === undefined) {
    throw new Error('Dude, we need a fucking payload!')
  }

  const hasMethodProp = Object.prototype.hasOwnProperty.call(payload, '_method')

  if (!hasMethodProp || payload._method !== method) {
    payload._method = method
  }

  return payload
}

export { appHome, showRequestError, frontApi, createBlob, uuid, normalizePayloadMethod }
