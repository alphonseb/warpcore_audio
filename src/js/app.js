$(document).ready(function(){

  //header link anim

  const HEADERLINKS = document.querySelectorAll('.menu > li > a')
  const HEADERUNDER = document.querySelectorAll('.menu > li > div')

  for (let i = 0; i < HEADERLINKS.length; i++) {
    HEADERLINKS[i].addEventListener(
      'mouseleave',
      ()=>{
        if (!HEADERUNDER[i].classList.contains('link-selected')) {
        HEADERUNDER[i].classList.add('underline-back')          
        }
      },

      false
    )
  }


// Scrol animation

  const SCROLL = document.querySelector('.scroll span')

  if (window.innerWidth < 900) {
    SCROLL.parentNode.style.display = 'none'
  }

  window.addEventListener('scroll',()=>{
    if (window.scrollY + window.innerHeight > document.body.clientHeight) {
      SCROLL.innerHTML = 'BACK TO TOP'
      SCROLL.classList.add('to-top')
      SCROLL.parentNode.addEventListener('click',
    ()=>{
      console.log('click');
      $('html, body').stop(true,false).animate( { scrollTop: $('main').offset().top }, 1000 );
    },false)
    }
    else {
      SCROLL.innerHTML = 'SCROLL'
      SCROLL.classList.remove('to-top')
    }
  },false)


  /**** HOME PAGE ***/

    // slider

  const SLIDER = document.querySelector('.slider')
  const IMGS = document.querySelectorAll('.slider img')
  const BULLETS = document.querySelectorAll('.slider-bullet div')

  if (SLIDER != null) {
    let index = 0
    let previous = 0



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

    SLIDER.addEventListener('mouseenter',()=>{
      clearInterval(slider)
    }, false)

    SLIDER.addEventListener('mouseleave',()=>{
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
  }

    // Anim services

  const CAT = document.querySelectorAll('.services-categories p')
  const DESC = document.querySelectorAll('.services-description ul')
  const SERVICON = document.querySelectorAll('.services-description div')

  if (CAT !== null) {
    for (let i = 0; i < CAT.length; i++) {
      CAT[i].addEventListener('click',
    ()=>{
      let backPos = document.querySelector('.services')
      if (i==1) {
        backPos.style.backgroundPosition = 'left'
        document.querySelector('#services-link').setAttribute('title','Vers page Particuliers')
        document.querySelector('#services-link').setAttribute('href','particular.php')
      }
      else {
        backPos.style.backgroundPosition = 'right'
        document.querySelector('#services-link').setAttribute('title','Vers page Professionnels')
        document.querySelector('#services-link').setAttribute('href','professional.php')
      }
      document.querySelector('.category-selected').classList.remove('category-selected')
      CAT[i].classList.add('category-selected')
      for (let j = 0; j < SERVICON.length; j++) {
        if (window.innerWidth < 900) {
          SERVICON[j].classList.toggle(`description-icon-${j}-responsive`)
        }
        else {
          SERVICON[j].style.transform = `translate(-${i}00%)`
        }
      }
      if (i == 0) {
        DESC[0].style.transform = `translatey(0)`
        DESC[1].style.bottom = '100%'
      }
      else {
        DESC[0].style.transform = 'translatey(115%)'
        DESC[1].style.bottom = '0'
      }
    },false)
    }
  }


    //REMOVE CLIP PATH FOR mobile

  const CLIP = document.querySelectorAll('.clip-img')
  if (CLIP !== null) {
    if (window.innerWidth < 900) {
      for (let i = 0; i < CLIP.length; i++) {
        CLIP[i].classList.remove('clip-img')
      }
    }
  }

    // ytPlayer

  let ytPlayer = document.querySelector('#frame')
  if (ytPlayer !== null) {
    if (window.innerWidth < 900){
      let ytMobile = document.createElement('div')
      ytMobile.innerHTML = "<iframe width='560' height='315' src='https://www.youtube.com/embed/videoseries?list=PLl7DBpCoPyXjgzxGYGMaPU1pZ3aSVOIPr' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen='' style='width: 100%;'></iframe>"
      ytPlayer = ytPlayer.parentNode.replaceChild(ytMobile,ytPlayer)
    }
    else {
      ytPlayer.style.height = ytPlayer.offsetWidth *0.7* 480/864 + 'px'
    }
  }


    // Equipment liste

    const equipmentLinks = document.querySelectorAll('.location-content div a')
    const equipmentLists = document.querySelectorAll('.location-content div .equipment')

    if (equipmentLinks !== null && equipmentLists !== null) {
      for (let i = 0; i < equipmentLinks.length; i++) {
        equipmentLinks[i].addEventListener(
          'click',
        (e)=>{
          e.preventDefault()
          equipmentLists[i].style.transform = 'translate(-50%) scale(1)'
        },
      false)
      }
      window.addEventListener(
        'click',
        ()=>{
          for(let i = 0; i < equipmentLists.length; i++){
            equipmentLists[i].style.transform = 'translate(-50%) scale(0)'
          }
        },
        false)
      window.addEventListener(
        'scroll',
        ()=>{
          for(let i = 0; i < equipmentLists.length; i++){
            equipmentLists[i].style.transform = 'translate(-50%) scale(0)'
          }
        },
        false)
      for (let i = 0; i < equipmentLists.length; i++) {
        equipmentLists[i].addEventListener(
          'click',
          (e)=>{
            e.stopPropagation()
          },
          false
        )
        equipmentLinks[i].addEventListener(
          'click',
          (e)=>{
            e.stopPropagation()
          },
          false
        )
      }
    }


        //File name display

    let fileInput = document.querySelector('#file')
    let fileName = document.querySelector('#fileName')

    if (fileInput !== null && fileName !== null) {
      fileInput.addEventListener(
        'change',
        ()=>{
          fileName.innerHTML = fileInput.files.item(0).name
        },
        false
      )
    }







});
