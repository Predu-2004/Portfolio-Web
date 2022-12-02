const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  

    breakpoints: {

        640: {
            slidesPerView: 2,
            spaceBetween: 40,
        },

        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },

        1024: {
            slidesPerView: 5,
            spaceBetween: 50,
        }
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
  });