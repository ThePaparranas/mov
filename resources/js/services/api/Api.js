import { showRequestError } from '../tools/request-errors'

const appHome = '/FrontApi'
const apiBase = `${appHome}`

function createBlob (blob, name = 'log.txt') {
  let downloadUrl = window.URL.createObjectURL(new Blob([blob]))
  let downloadLink = document.createElement('a')

  downloadLink.href = downloadUrl
  downloadLink.setAttribute('download', `laravel-log-${name}`)

  document.body.appendChild(downloadLink)

  downloadLink.click()

  return Promise.resolve(true)
}

function uuid () {
  return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
    let r = Math.random() * 16 | 0
    let v = c === 'x'
      ? r
      : (r & 0x3 | 0x8)
    return v.toString(16)
  })
}

function normalizePayloadMethod (payload, method, force = false) {
  if (force && payload === undefined) {
    throw new Error(`Dude, we need a fucking payload!`)
  }

  if (!payload.hasOwnProperty('_method') || payload._method !== method) {
    payload._method = method
  }

  return payload
}

export { appHome, showRequestError, apiBase, createBlob, uuid, normalizePayloadMethod }
