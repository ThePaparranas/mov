import swal from 'sweetalert2'

function showRequestError (e) {
  let msg = e.response.data.message ? `<p>${e.response.data.message}</p>` : ''

  msg += e.response.data.file ? `<p><strong>File: </strong>${e.response.data.file}</p>` : ''
  msg += e.response.data.line ? `<p><strong>Line: </strong>${e.response.data.line}</p>` : ''

  swal.fire(e.message, msg, 'error').then(() => {})

  return Promise.reject(e)
}

export { showRequestError }
