let topLayer = document.querySelector('.top-bun');
let botLayer = document.querySelector('.bottom-bun')
let midLayer = document.querySelector('.steak')
let hamburger =document.querySelector('.hamburger-container')

hamburger.addEventListener(
  'click',
  function(){
    if (botLayer.classList.contains('after')) {
      botLayer.classList.add('after-reverse')
      topLayer.classList.add('before-reverse')
      midLayer.style.animation = 'open 1s linear forwards'
      topLayer.classList.remove('before')
      botLayer.classList.remove('after')

    }
    else{
      if (botLayer.classList.contains('after-reverse')) {
        botLayer.classList.remove('after-reverse')
        topLayer.classList.remove('before-reverse')
      }
      topLayer.classList.add('before')
      botLayer.classList.add('after')
      midLayer.style.animation = 'close .5s linear forwards'

    }

  },
  false
)
