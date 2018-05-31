const IMGS = document.querySelectorAll('.slider img')
const BULLETS = document.querySelectorAll('.slider-bullet div')
let index = 0
let previous = 0

let slider = setInterval(()=>{


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

},5000)
