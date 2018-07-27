'use strict';

$(document).ready(function () {

  //header link anim

  var HEADERLINKS = document.querySelectorAll('.menu > li > a');
  var HEADERUNDER = document.querySelectorAll('.menu > li > div');

  var _loop = function _loop(i) {
    HEADERLINKS[i].addEventListener('mouseleave', function () {
      if (!HEADERUNDER[i].classList.contains('link-selected')) {
        HEADERUNDER[i].classList.add('underline-back');
      }
    }, false);
  };

  for (var i = 0; i < HEADERLINKS.length; i++) {
    _loop(i);
  }

  // Scrol animation

  var SCROLL = document.querySelector('.scroll span');

  if (window.innerWidth < 900) {
    SCROLL.parentNode.style.display = 'none';
  }

  window.addEventListener('scroll', function () {
    if (window.scrollY + window.innerHeight > document.body.clientHeight) {
      SCROLL.innerHTML = 'BACK TO TOP';
      SCROLL.classList.add('to-top');
      SCROLL.parentNode.addEventListener('click', function () {
        console.log('click');
        $('html, body').stop(true, false).animate({ scrollTop: $('main').offset().top }, 1000);
      }, false);
    } else {
      SCROLL.innerHTML = 'SCROLL';
      SCROLL.classList.remove('to-top');
    }
  }, false);

  /**** HOME PAGE ***/

  // slider

  var SLIDER = document.querySelector('.slider');
  var IMGS = document.querySelectorAll('.slider img');
  var BULLETS = document.querySelectorAll('.slider-bullet div');

  if (SLIDER != null) {
    (function () {
      var sliding = function sliding() {
        if (index == IMGS.length - 1 || previous > index && index != 0) {
          previous = index;
          index--;
        } else {
          previous = index;
          index++;
        }

        for (var i = 0; i < IMGS.length; i++) {
          IMGS[i].style.transform = 'translate(-' + index + '00%)';
        }

        document.querySelector('.selected').classList.remove('selected');
        BULLETS[index].classList.add('selected');
      };

      var index = 0;
      var previous = 0;

      var slider = setInterval(function () {
        sliding();
      }, 5000);

      var _loop2 = function _loop2(i) {
        BULLETS[i].addEventListener('click', function () {
          clearInterval(slider);

          index = i;
          for (var _i = 0; _i < IMGS.length; _i++) {
            IMGS[_i].style.transform = 'translate(-' + index + '00%)';
          }

          document.querySelector('.selected').classList.remove('selected');
          BULLETS[index].classList.add('selected');

          slider = setInterval(function () {
            sliding();
          }, 5000);
        });
      };

      for (var i = 0; i < BULLETS.length; i++) {
        _loop2(i);
      }

      SLIDER.addEventListener('mouseenter', function () {
        clearInterval(slider);
      }, false);

      SLIDER.addEventListener('mouseleave', function () {
        slider = setInterval(function () {
          sliding();
        }, 5000);
      }, false);
    })();
  }

  // Anim services

  var CAT = document.querySelectorAll('.services-categories p');
  var DESC = document.querySelectorAll('.services-description ul');
  var SERVICON = document.querySelectorAll('.services-description div');

  if (CAT !== null) {
    var _loop3 = function _loop3(i) {
      CAT[i].addEventListener('click', function () {
        var backPos = document.querySelector('.services');
        if (i == 1) {
          backPos.style.backgroundPosition = 'left';
          document.querySelector('#services-link').setAttribute('title', 'Vers page Particuliers');
          document.querySelector('#services-link').setAttribute('href', 'particular.php');
        } else {
          backPos.style.backgroundPosition = 'right';
          document.querySelector('#services-link').setAttribute('title', 'Vers page Professionnels');
          document.querySelector('#services-link').setAttribute('href', 'professional.php');
        }
        document.querySelector('.category-selected').classList.remove('category-selected');
        CAT[i].classList.add('category-selected');
        for (var j = 0; j < SERVICON.length; j++) {
          if (window.innerWidth < 900) {
            SERVICON[j].classList.toggle('description-icon-' + j + '-responsive');
          } else {
            SERVICON[j].style.transform = 'translate(-' + i + '00%)';
          }
        }
        if (i == 0) {
          DESC[0].style.transform = 'translatey(0)';
          DESC[1].style.bottom = '100%';
        } else {
          DESC[0].style.transform = 'translatey(115%)';
          DESC[1].style.bottom = '0';
        }
      }, false);
    };

    for (var i = 0; i < CAT.length; i++) {
      _loop3(i);
    }
  }

  //REMOVE CLIP PATH FOR mobile

  var CLIP = document.querySelectorAll('.clip-img');
  if (CLIP !== null) {
    if (window.innerWidth < 900) {
      for (var i = 0; i < CLIP.length; i++) {
        CLIP[i].classList.remove('clip-img');
      }
    }
  }

  // ytPlayer

  var ytPlayer = document.querySelector('#frame');
  if (ytPlayer !== null) {
    if (window.innerWidth < 900) {
      var ytMobile = document.createElement('div');
      ytMobile.innerHTML = "<iframe width='560' height='315' src='https://www.youtube.com/embed/videoseries?list=PLl7DBpCoPyXjgzxGYGMaPU1pZ3aSVOIPr' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen='' style='width: 100%;'></iframe>";
      ytPlayer = ytPlayer.parentNode.replaceChild(ytMobile, ytPlayer);
    } else {
      ytPlayer.style.height = ytPlayer.offsetWidth * 0.7 * 480 / 864 + 'px';
    }
  }

  // Equipment liste

  var equipmentLinks = document.querySelectorAll('.location-content div a');
  var equipmentLists = document.querySelectorAll('.location-content div .equipment');

  if (equipmentLinks !== null && equipmentLists !== null) {
    var _loop4 = function _loop4(_i2) {
      equipmentLinks[_i2].addEventListener('click', function (e) {
        e.preventDefault();
        equipmentLists[_i2].style.transform = 'translate(-50%) scale(1)';
      }, false);
    };

    for (var _i2 = 0; _i2 < equipmentLinks.length; _i2++) {
      _loop4(_i2);
    }
    window.addEventListener('click', function () {
      for (var _i3 = 0; _i3 < equipmentLists.length; _i3++) {
        equipmentLists[_i3].style.transform = 'translate(-50%) scale(0)';
      }
    }, false);
    window.addEventListener('scroll', function () {
      for (var _i4 = 0; _i4 < equipmentLists.length; _i4++) {
        equipmentLists[_i4].style.transform = 'translate(-50%) scale(0)';
      }
    }, false);
    for (var _i5 = 0; _i5 < equipmentLists.length; _i5++) {
      equipmentLists[_i5].addEventListener('click', function (e) {
        e.stopPropagation();
      }, false);
      equipmentLinks[_i5].addEventListener('click', function (e) {
        e.stopPropagation();
      }, false);
    }
  }

  //File name display

  var fileInput = document.querySelector('#file');
  var fileName = document.querySelector('#fileName');

  if (fileInput !== null && fileName !== null) {
    fileInput.addEventListener('change', function () {
      fileName.innerHTML = fileInput.files.item(0).name;
    }, false);
  }
});
'use strict';

var topLayer = document.querySelector('.top-bun');
var botLayer = document.querySelector('.bottom-bun');
var midLayer = document.querySelector('.steak');
var hamburger = document.querySelector('.hamburger-container');

hamburger.addEventListener('click', function () {
  if (botLayer.classList.contains('after')) {
    botLayer.classList.add('after-reverse');
    topLayer.classList.add('before-reverse');
    midLayer.style.animation = 'open 1s linear forwards';
    topLayer.classList.remove('before');
    botLayer.classList.remove('after');
  } else {
    if (botLayer.classList.contains('after-reverse')) {
      botLayer.classList.remove('after-reverse');
      topLayer.classList.remove('before-reverse');
    }
    topLayer.classList.add('before');
    botLayer.classList.add('after');
    midLayer.style.animation = 'close .5s linear forwards';
  }
}, false);
'use strict';

var HEADER = document.querySelector('header');

window.addEventListener('scroll', function () {
  if (window.scrollY > 0) {
    HEADER.classList.add('header-fixed');
  } else {
    HEADER.classList.remove('header-fixed');
  }
});

var HAMBURGER = document.querySelector('.hamburger-container');

HAMBURGER.addEventListener('click', function () {
  if (document.querySelector('.nav-mobile-display') == null) {
    document.querySelector('nav').classList.add('nav-mobile-display');
    setTimeout(function () {
      document.querySelector('nav').classList.add('nav-mobile-transform');
    }, 300);
  } else {
    document.querySelector('nav').classList.remove('nav-mobile-transform');
    setTimeout(function () {
      document.querySelector('nav').classList.remove('nav-mobile-display');
    }, 300);
  }
});