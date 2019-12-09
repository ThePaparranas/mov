import swal from 'sweetalert2'

function swalError (title = 'ERRO!', html) {
  return swal.fire({
    title,
    html,
    icon: 'error'
  })
}

function swalSuccess (title = 'OK!', html) {
  return swal.fire({
    title,
    html,
    icon: 'success'
  })
}

const alertConfirm = function (html) {
  return swal.fire({
    title: 'CONFIRMAR',
    html,
    confirmButtonColor: '#d33',
    confirmButtonText: 'Sim',
    showCancelButton: true,
    cancelButtonText: 'Cancelar',
    focusCancel: true,
    icon: 'question'
  }).then((go) => {
    return Promise.resolve(!!go.value)
  })
}

const alertSuccess = function (title, html) {
  if (html === undefined) {
    html = title
    title = undefined
  }

  return swalSuccess(title, html)
}

const alertError = function (msg) {
  return swalError('ERRO!', msg)
}

export {
  alertConfirm,
  alertSuccess,
  alertError
}
