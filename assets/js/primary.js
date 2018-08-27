//banner轮播
var bannerSwiper = new Swiper('.banner_swiper',{
  speed:1000,
  simulateTouch : false,//禁止鼠标模拟
  effect:'fade',
  autoplay:{
    delay:5000
  },
  pagination: {
    el: '.banner_pagination',
    clickable :true,
    bulletClass : 'bannner_bullet',
    bulletActiveClass: 'banner_bullet_active',
  }
})

//师资团队轮播
var teacherSwiper = new Swiper('.teachers-swiper', {
  spaceBetween: 15,
  slidesPerView: 6,
  simulateTouch : false,//禁止鼠标模拟
  pagination: {
    el: '.teachers-swiper-pagination',
  },
  // 如果需要前进后退按钮

  navigation: {
    nextEl: '.teacher-next',
    prevEl: '.teacher-prev',
  },
  breakpoints: {
    1024: {
      slidesPerView: 4
    },
    768: {
      slidesPerView: 3
    },
    640: {
      slidesPerView: 2
    },
    320: {
      slidesPerView: 1
    }
  }
});

//特色课程swiper
var classTop = new Swiper('.classes_swiper_top', {
  slidesPerView: 1,
  simulateTouch : false,//禁止鼠标模拟
  navigation: {
    nextEl: '.classes-next',
    prevEl: '.classes-prev',
  },
});
var classBottom = new Swiper('.classes_swiper_bottom', {
  spaceBetween: 15,
  // loop:true, 
  slidesPerView: 'auto',
  // centeredSlides: true,
  // simulateTouch : false,//禁止鼠标模拟
  normalizeSlideIndex: false,
  touchRatio: 0.2,
  slideToClickedSlide: true
});
// classTop.controller.control = classBottom;
// classBottom.controller.control = classTop;
classBottom.on('slideChangeTransitionStart', function () {
  classTop.slideTo(this.activeIndex, 300, false)
})
classTop.on('slideChangeTransitionStart', function () {
  classBottom.slideTo(this.activeIndex, 300, false)
});

//园区设计轮播
var parkSwiper = new Swiper('.swiper-container', {
  slidesPerView: 4,
  slidesPerColumn: 2,
  spaceBetween: 15,
  simulateTouch : false,//禁止鼠标模拟
  pagination: {
    el: '.park-swiper-pagination',
  },
  // 如果需要前进后退按钮
  navigation: {
    nextEl: '.park-next',
    prevEl: '.park-prev',
  },
  breakpoints: {
    1024: {
      slidesPerView: 4,
      spaceBetween: 40
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    640: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 10
    }
  }
});