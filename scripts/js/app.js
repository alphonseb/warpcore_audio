const IMGS = document.querySelectorAll('.slider img')
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


},3000)
