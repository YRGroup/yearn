AOS.init();
var skrollr;

//只有pc端初始化视差滚动
function initSkrollr() {
  if (!/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
    skrollr = skrollr.init();
    // setTimeout(() => {
    //   document.body.style.height="auto";
    // }, 20);

  }
}

//顶部导航
$('.yearn_nav').children().click(function () {
  var id = $(this).attr('data-id');
  if (id) {
    // $(this).addClass('active');
    $.scrollTo('#' + id + '', 500);
  }
  if ($(this).siblings().hasClass('active')) {
    $(this).siblings().removeClass('active');
  }
})

//返回顶部
$('.gotop').click(function () {
  $("html, body").animate({
    scrollTop: 0
  }, 500);
})
$(window).bind("scroll", function () {
  var d = $(document).scrollTop()
  0 < d ? $('.cbbfixed').css("bottom", "20px") : $('.cbbfixed').css("bottom", "-90px");
});

//手机端导航
$('#burgerBtn').click(function () {
  if ($('#burgerBtn').hasClass('active')) {
    hideMobileNav();
  } else {
    showMobileNav();
  }
});
$('#nav li').on('click', function () {
  hideMobileNav();
})

$('#nav').on('touchmove', function (e) {
  return false;
})

$('.yearn_header_mobile').on('touchmove', function (e) {
  return false;
})
//显示手机导航
function showMobileNav() {
  $('#burgerBtn').toggleClass('active');
  $('body').addClass('showNav');
  $('#nav').fadeToggle();
  $('#nav ul').slideDown();
}
//隐藏手机导航
function hideMobileNav() {
  $('#burgerBtn').toggleClass('active');
  $('body').removeClass('showNav');
  $('#nav').fadeToggle();
  $('#nav ul').slideUp();
}
// $('#mobile_nav').click(function () {
//   $('#mobile').addClass('mobile_nav');
//   $('#mobile').removeClass('navigation');
// })
// $('#nav li').click(function () {
//   $('#mobile').removeClass('navigation');
// })

//header动画
var OFFSETTOP = 100,
  CURRENTHEIGHT = 70;
$(window).bind('scroll', function (e) {
  if ($(window).scrollTop() > OFFSETTOP) {
    if (!$('.yearn_header').hasClass('fixed_header')) {
      $('.yearn_header').addClass('fixed_header');
      $('.fixed_header').animate({
        top: 0,
        opacity: 1
      });
      // $('.yearn_header .yearn_content').animate({
      //   height: '50px'
      // })
    }
  } else {
    if ($('.yearn_header').hasClass('fixed_header')) {
      $('.fixed_header').attr('style', '');
      $('.yearn_header').removeClass('fixed_header');
      // $('.yearn_header .yearn_content').css({
      //   height: '' + CURRENTHEIGHT + 'px'
      // })
    }
  }
})

//大banner轮播
//banner轮播
var bannerSwiper = new Swiper('.banner_swiper', {
  speed: 300,
  autoplay: {
    delay: 5000
  },
  effect: 'fade',
  pagination: {
    el: '.banner_pagination',
    clickable: true,
    bulletClass: 'bannner_bullet',
    bulletActiveClass: 'banner_bullet_active',
  }
})


//相册弹出层 
$('.img_view').click(function () {
  var currentIndex = $(this).index();
  var els = $(this).parent().find('.img_view');
  var imgData = {
    "start": currentIndex, //初始显示的图片序号，默认0
    "data": [] //相册包含的图片，数组格式
  }

  $.each(els, function (i) {
    var el = $(els[i]).find('img');
    if (el.attr('src')) {
      imgData['data'].push({
        'src': el.attr('data-src') ? el.attr('data-src') : el.attr('src'),
        "alt": el.attr('alt')
      });
    }
  })
  imgView(imgData);
})

function imgView(imgs) {
  layer.photos({
    photos: imgs,
    anim: 5
  });
}

//视频
var video = document.getElementById('video');
$('.playVideo').click(function () {
  var src = $(this).attr("data-src");
  playVideo(src);
})

$('.closeVideo').click(function () {
  closeVideo();
})

//弹出视频
function playVideo(src) {
  $('.modal').show();
  $('.video_wrapper').show();
  if (src) {
    initVideo(src, true)
  }
}
//关闭视频弹窗
function closeVideo() {
  // video.pause();
  $('.modal').hide();
  $('.video_wrapper').hide();
  $("#jquery_jplayer_1").jPlayer('pause');
}
//初始化视频
function initVideo(src, autoPlay) {
  $("#jquery_jplayer_1").jPlayer({
    ready: function () {
      $(this).jPlayer("setMedia", {
        title: "Becoming Who You Are",
        mp4: src,
        m4v: src,
        ogv: src,
        webmv: src,
        // poster: "http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png"
      });
      //自动播放
      if (autoPlay) {
        $("#jquery_jplayer_1").jPlayer('play');
      }
    },
    swfPath: "../../dist/jplayer",
    supplied: "mp4,webmv, ogv, m4v",
    size: {
      width: "840px",
      height: "460px",
      cssClass: "jp-video-360p"
    },
    useStateClassSkin: true,
    autoBlur: false,
    smoothPlayBar: true,
    keyEnabled: true,
    remainingDuration: true,
    toggleDuration: true
  });

}

//手风琴
$('.slide_title').click(function () {
  $(this).parent('li').siblings('li').children('.item_content').slideUp();
  $(this).parent('li').siblings('li').children('.slide_title').removeClass('active');
  $(this).next().slideToggle(200);
  $(this).toggleClass('active');
})

//导航
$('.yearn_nav .item').mouseover(function () {
  var nav = $(this).find('.sub_nav')
  $(nav).show()
})
$('.yearn_nav .item').mouseleave(function () {
  var nav = $(this).find('.sub_nav')
  $(nav).hide()
})


//tab
$('.tabs .tab').click(function () {
  if (!$(this).hasClass('active')) {

    $(this).addClass('active');
    $(this).siblings().removeClass('active');

    var index = $(this).data('index');
    var contens = $(this).parents('.tabbar').find('.content')
    contens.hide();
    contens.each(function (i) {
      if ($(contens[i]).data('index') == index) {
        $(contens[i]).fadeIn();
      }
    })
  }
})

// initSkrollr();
//小程序页面 隐藏标题
function getQueryString(name) {
  var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
  var r = window.location.search.substr(1).match(reg);
  if (r != null) return unescape(r[2]);
  return null;
}

if(getQueryString('weapp')==1){
  $('.yearn_header_mobile').hide();
  $('body').css('padding',0);
  $('.detailBg').css('paddingTop',0)
}
