//显示加载进度
var doms = [];
var loadingSrc = [];
var loadingNum = 0;

// 大图时显示加载进度
// getDoms($('#fullpage').get(0));
// getLoadingSrc(doms);
// getLoadingNum(loadingSrc);

//遍历doms
function getDoms(parent) {
  var children = parent.childNodes;
  var len = children.length;
  for (var i = 0; i < len; i++) {
    if (children[i].nodeType == 1) {
      doms.push(children[i]);
    }
    getDoms(children[i]);
  }
}

//帅选需要加载资源图片地址
function getLoadingSrc(doms) {
  $(doms).each(function (i, el) {
    if (el.nodeName == 'IMG') {
      loadingSrc.push($(el).attr('src'))
    }
    if ($(el).css('backgroundImage') != 'none') {
      var reg = /^url\("(.+)"\)$/;
      loadingSrc.push($(el).css('backgroundImage').match(reg)[1])
    }
  })
}

//计算加载进度
function getLoadingNum(srcs) {
  srcs.forEach(el => {
    var img = new Image();
    img.src = el;
    img.onload = function () {
      loadingNum++;
      var percent = Math.floor(loadingNum / srcs.length * 100)
      showLoadingNum(percent);
    }
    img.onerror = function () {
      loadingNum++;
      var percent = Math.floor(loadingNum / srcs.length * 100)
      showLoadingNum(percent);
    }
  });
}

//展示进度
function showLoadingNum(percent) {
  console.log(percent)
  $('#progressBar').css('width', percent + '%');
  $('#num').html(percent + '%')
  if (percent == 100) {
    setTimeout(() => {
      loadingReady();
    }, 1000);
  }
}

//加载完成handle
function loadingReady() {
  $('.loading').hide();
}

$('#nav li').on('click', function () {
  if ($(document).width() < 768) {
    hideMobileNav();
  }
})

function hideMobileNav() {
  $('#burgerBtn').toggleClass('active');
  $('body').removeClass('showNav');
  $('#nav').fadeToggle();
  $('#nav ul').slideUp();
}
var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
var hardware = new Swiper('.page6', {
  speed: 1000,
  simulateTouch: false, //禁止鼠标模拟
  effect: 'fade',
  loop: true,
  autoplay: {
    delay: 5000
  },
  pagination: {
    el: '.pagination',
    clickable: true,
    bulletClass: 'bullet',
    bulletActiveClass: 'bullet_active',
  },
  // 如果需要前进后退按钮
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
})
animateOut($(document));
//初始化
$('#fullpage').fullpage({
  //nav
  menu: 'nav',
  // navigation: true,
  navigationPosition: 'right',
  // navigationTooltips: ['First page', 'Second page', 'Third and last page'],
  anchors: ['page1', 'page2', 'page4', 'page5', 'page6', 'page7', 'page8', 'page9'],
  //内容居中
  verticalCentered: false,
  slidesNavigation: true,
  slidesNavPosition: 'bottom',
  autoScrolling: true,
  lazyLoading: true,
  // 滚动
  // css3:false,
  // easingcss3:'fade',
  scrollHorizontally: true,
  fadingEffect: 'slides',
  fitToSectionDelay: 1000,
  scrollingSpeed: 500,
  afterRender: function () {},
  //
  afterRender: function () {
    //slide自动播放
    setInterval(function () {
      $.fn.fullpage.moveSlideRight();
    }, 5000);
  },
  //离开当前屏
  onLeave: function (index, nextIndex, direction) {
    //导航
    addActive(nextIndex - 1);
    //覆盖切换
    var page = $('.section')[index - 1];
    var nextPage = $('.section')[nextIndex - 1];
    var nextHeight = $(nextPage).css('height');
    var vheight = page.clientHeight;
    if (direction == 'down' && nextIndex != $('.section').length) {
      $(page).css('transition', 'all .7s');
      $(page).css('transform', 'translateY(' + nextHeight + ')');
      $(page).css('background-position', '0 -' + vheight / 2 + 'px');
    } else if (direction == 'up' && index != $('.section').length) {
      $(nextPage).css('zIndex', '99');
      $(page).css('transition', 'all .7s');
      $(page).css('background-position', '0 ' + vheight / 2 + 'px');
      $(page).css('transform', 'translateY(-' + nextHeight + ')');
    }
    //过渡动画
    animateOut(page);
  },
  //滚动到当前屏结束
  afterLoad: function (origin, index) {
    //覆盖切换
    var page = $('.section')[index - 1];
    $('.section').css('zIndex', 'auto');
    $('.section').css('transition', 'all 0s');
    $('.section').css('transform', 'translateY(0)');
    $('.section').css('background-position', '0 0');
    //过渡动画
    animateIn(page);
  },

  afterSlideLoad: function (section, origin, destination, direction) {

  },
  // onSlideLeave: function (section, sectionIndex, slide, direction, nextSlide) {
  //   var section = $('.section')[sectionIndex - 1];
  //   var slide = $(section).find('.slide')[nextSlide];
  //   animateIn(slide);
  // }
});

function animateIn(page) {
  var doms = $(page).find('*[data-in]');

  doms.each(function () {
    var animateIn = $(this).attr('data-in');
    var animateOut = $(this).attr('data-out');

    $(this).addClass(animateIn).one(animationEnd, function () {
      $(this).removeClass(animateIn);
    });
    $(this).removeClass(animateOut);
  })
}

function animateOut(page) {
  var doms = $(page).find('*[data-out]')
  doms.each(function () {
    var animateOut = $(this).attr('data-out');
    $(this).addClass(animateOut).one(animationEnd, function () {
      // $(this).removeClass(animateOut);
    });
  })
}

function addActive(index) {
  $('#nav li[data-menuanchors]').removeClass('active');
  $($('#nav li[data-menuanchors]')[index]).addClass('active');
}