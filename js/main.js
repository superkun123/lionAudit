let menuBtn = document.querySelector('.nav-main__hamburger')
let modalBtn = document.querySelectorAll('.contacts__modal')
let closeBtn = document.querySelector('.modal__cross')
let modal = document.querySelector('.modal')
let menu = document.querySelector('.nav__list')

menuBtn.addEventListener('click', function() {
    let menu = document.querySelector('.nav__list')
    menu.classList.toggle('show')
    menuBtn.classList.toggle('close')
})

// modalBtn.addEventListener('click', function(event) {
//     event.preventDefault()
//     modal.classList.toggle('show')
// })


modalBtn.forEach(element => {
  element.addEventListener('click', function(event) {
    event.preventDefault()
    modal.classList.toggle('show')
})
});

closeBtn.addEventListener('click', function() {
    event.preventDefault()
    modal.classList.toggle('show')
})


var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    autoplay: {
        delay: 5000,
      },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  })


  var mySwiper2 = new Swiper('.swiper__container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    autoplay: {
        delay: 5000,
      },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  })



