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

const HAMBURGER = document.querySelector('.hamburger-container')

HAMBURGER.addEventListener('click',
()=>{
  if (document.querySelector('.nav-mobile-display') == null) {
    document.querySelector('nav').classList.add('nav-mobile-display')
    setTimeout(()=>{
      document.querySelector('nav').classList.add('nav-mobile-transform')
    },300)
  }
  else {
    document.querySelector('nav').classList.remove('nav-mobile-transform')
    setTimeout(()=>{
      document.querySelector('nav').classList.remove('nav-mobile-display')
    },300)
  }
})
