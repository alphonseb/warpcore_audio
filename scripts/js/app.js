$(document).ready(function(){
  const IMGS = document.querySelectorAll('.slider img')
  const BULLETS = document.querySelectorAll('.slider-bullet div')
  const SCROLL = document.querySelector('.scroll span')

  let index = 0
  let previous = 0

  window.addEventListener('scroll',()=>{
    if (window.scrollY + window.innerHeight > document.body.clientHeight) {
      SCROLL.innerHTML = 'BACK TO TOP'
      SCROLL.classList.add('to-top')
      SCROLL.parentNode.addEventListener('click',
    ()=>{
      console.log('click');
      $('html, body').animate( { scrollTop: 0 }, 1000 ); // Go
    },false)
    }
    else {
      SCROLL.innerHTML = 'SCROLL'
      SCROLL.classList.remove('to-top')
    }
  },false)

  let slider = setInterval(()=>{
    sliding()
  },5000)

  for (let i = 0; i < BULLETS.length; i++) {
    BULLETS[i].addEventListener('click',()=>{
      clearInterval(slider)

      index = i
      for (let i = 0; i < IMGS.length; i++) {
        IMGS[i].style.transform = `translate(-${index}00%)`
      }

      document.querySelector('.selected').classList.remove('selected')
      BULLETS[index].classList.add('selected')

      slider = setInterval(()=>{sliding()},5000)
    })
  }

  document.querySelector('.slider').addEventListener('mouseenter',()=>{
    clearInterval(slider)
  }, false)

  document.querySelector('.slider').addEventListener('mouseleave',()=>{
    slider = setInterval(()=>{sliding()},5000)
  }, false)


  function sliding(){
    if (index == IMGS.length - 1 || previous > index && index != 0) {
      previous = index
      index--
    }
    else {
      previous = index
      index++
    }

    for (let i = 0; i < IMGS.length; i++) {
      IMGS[i].style.transform = `translate(-${index}00%)`
    }

    document.querySelector('.selected').classList.remove('selected')
    BULLETS[index].classList.add('selected')
  }
});
