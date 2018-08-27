
// window.location.href="http://yearn/kindergarten";

//师资团队轮播
var teacherSwiper = new Swiper('.teachers-swiper', {
  spaceBetween: 15,
  slidesPerView: 6,
  pagination: '.teacher-swiper',
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
      slidesPerView: 4,
      spaceBetween: 40
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 10
    }
  }
});

//特色课程轮播
var classTop = new Swiper('.classes_swiper_top', {
  navigation: {
    nextEl: '.classes-next',
    prevEl: '.classes-prev',
  },
});
var classBottom = new Swiper('.classes_swiper_bottom', {
  spaceBetween: 15,
  slidesPerView: 'auto',
  normalizeSlideIndex:false,
  touchRatio: 0.2,
  slideToClickedSlide: true,
});
classBottom.on('slideChangeTransitionStart',function(){
  classTop.slideTo(this.activeIndex, 300, false)
})
classTop.on('slideChangeTransitionStart',function(){
  classBottom.slideTo(this.activeIndex, 300, false)
})

//少儿活动轮播

var swiper = new Swiper('.swiper-container', {
  slidesPerView: 3,
  slidesPerColumn: 2,
  spaceBetween: 15,
  pagination: {
    el: '.actives-swiper-pagination',
  },
  // 如果需要前进后退按钮
  navigation: {
    nextEl: '.park-next',
    prevEl: '.park-prev',
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 20
    }
  }
});


