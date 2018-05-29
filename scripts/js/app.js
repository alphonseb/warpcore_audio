const IMGS = document.querySelectorAll('.slider img')
let nb = 1

let slider = setInterval(()=>{
  for (let i = 0; i < IMGS.length; i++) {
    IMGS[i].style.transform = `translate(-${nb}00%)`
  }
  nb++
},1000)
