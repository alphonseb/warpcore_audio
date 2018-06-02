$(document).ready(function(){
  const IMGS = document.querySelectorAll('.slider img')
  const BULLETS = document.querySelectorAll('.slider-bullet div')
  const SCROLL = document.querySelector('.scroll span')
  const CAT = document.querySelectorAll('.services-categories p')
  const DESC = document.querySelectorAll('.services-description ul')
  const SERVICON = document.querySelectorAll('.services-description div')
  const YTPLAYER = document.querySelector('#frame')

  YTPLAYER.style.height = YTPLAYER.offsetWidth *0.7* 480/864 + 'px'

  let index = 0
  let previous = 0

  window.addEventListener('scroll',()=>{
    if (window.scrollY + window.innerHeight > document.body.clientHeight) {
      SCROLL.innerHTML = 'BACK TO TOP'
      SCROLL.classList.add('to-top')
      SCROLL.parentNode.addEventListener('click',
    ()=>{
      console.log('click');
      $('html, body').animate( { scrollTop: $('main').offset().top }, 1000 );
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

  for (let i = 0; i < CAT.length; i++) {
    CAT[i].addEventListener('click',
  ()=>{
    let backPos = document.querySelector('.services')
    if (i==1) {
      backPos.style.backgroundPosition = 'left'
      document.querySelector('#services-link').setAttribute('title','Vers page Particuliers')
    }
    else {
      backPos.style.backgroundPosition = 'right'
      document.querySelector('#services-link').setAttribute('title','Vers page Professionnels')
    }
    document.querySelector('.category-selected').classList.remove('category-selected')
    CAT[i].classList.add('category-selected')
    for (let j = 0; j < SERVICON.length; j++) {
      SERVICON[j].style.transform = `translate(-${i}00%)`
      if (i == 0) {
        DESC[j].style.transform = `translatey(0)`
      }
      else {
        DESC[j].style.transform = 'translatey(115%)'
      }
    }
  },false)
  }




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
