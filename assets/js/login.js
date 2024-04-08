const btnLogin = document.getElementsByName('btnLogin')
const btnBatal = document.getElementsByName('btnBatal')
const expiredContent = document.getElementById('expiredContent')
const expiredText = document.getElementById('expiredText')
const inputs = document.getElementsByTagName('input')

if (expiredContent.classList.contains('d-block')) {
  let sec = 9
  const myInterval = setInterval(() => {
    expiredText.textContent = sec
    sec--

    if (sec < 0)
      clearInterval(myInterval)
  }, 1000);
}

if (btnLogin[0].hasAttribute('disabled')) {
  setTimeout(resetStyle, 10000)
}

function resetStyle() {
  btnLogin[0].removeAttribute('disabled')
  btnBatal[0].removeAttribute('disabled')
  Array.from(inputs).forEach(el => {
    el.removeAttribute('disabled')
  })
  expiredContent.classList.remove('d-block')
  expiredContent.classList.add('d-none')
}