const HEADER = document.querySelector('header')

window.addEventListener('scroll',
()=>{
  if (window.scrollY > 0) {
    HEADER.classList.add('header-fixed')
  }
  else {
    HEADER.classList.remove('header-fixed')
  }
})
