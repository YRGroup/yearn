//svg
function animated() {
  new Vivus('banner_svg', {
    duration: 200
  }, function () {
    setTimeout(function () {
      animated();
    }, 10000)
  })
}
animated();

//学校
$('.yearn_school .item').mouseover(function () {
  $(this).find('.slideInUp').css('display', 'inline-block');
  $(this).find('.slideInUp').removeClass('slideOutDown');
})

$('.yearn_school .item').mouseleave(function () {
  $(this).find('.slideInUp').toggleClass('slideOutDown');
});

//视频swiper video_swiper
var videoSwiper = new Swiper('.video_swiper', {
  loop: true,
  effect: 'fade',
  // 如果需要分页器
  pagination: {
    el: '.video_pagination',
    bulletClass: 'my-bullet',
    bulletActiveClass: 'my-bullet-active',
    clickable: true
  },
  slidesPerView: 1,
  breakpoints: {
    640: {
      slidesPerView: 1
    }
  }
})

//国际顾问手风琴

var totalWidth = 1155;
var itemLength = $('.accordion .item').length;
var contentWidth = 300;
var itemWidth = 0;

//初始化宽度
$($('.accordion .item')[0]).addClass('active'); //默认第一个展开
if ($('.accordion .active').length) {
  itemWidth = (totalWidth - contentWidth) / itemLength;
  $('.accordion .item .item_img').animate({'width': itemWidth},{speed:300});
  $('.accordion .item').each(function (el) {
    if ($(this).hasClass('active')) {
      $(this).css('width', itemWidth + contentWidth);
    } else {
      $(this).css('width', itemWidth);
    }
  })
  // $('.accordion .item .item_img').css('width', itemWidth);
} else {
  itemWidth = totalWidth / itemLength;
  $('.accordion .item').css('width', itemWidth);
  $('.accordion .item .item_img').css('width', itemWidth);
}

$('.yearn_future .item').mousemove(function () {
  //兄弟元素变窄
  $(this).siblings().removeClass('active');
  $(this).siblings().css('width', itemWidth);
  $('.accordion .item .item_img').css('width', itemWidth);
  //当前元素显示内容
  $(this).addClass('active');
  $('.accordion .active').css('width', itemWidth + contentWidth);
})

//视频播放
$('.play').on('click', function () {
  showVideo($(this));
})

$('.video').on('click', function () {
  if ($(this).hasClass('playing')) {
    hideVideo();
  }
});
videoSwiper.on('slideChangeTransitionStart', function () {
  if ($('.playing').length) {
    hideVideo();
  }
})

function showVideo(dom) {
  dom.parent().addClass('hidde_wrapper');
  // $('.video_pagination').slideUp();
  dom.parent().parent().find('.video').get(0).play();
  dom.parent().parent().find('.video').addClass('playing');
}

function hideVideo() {
  $('.playing').get(0).pause();
  // $('.video_pagination').slideDown();
  $('.playing').parent().find('.icon_wrapper').removeClass('hidde_wrapper');
  $('.playing').removeClass('playing')
}

$('.video_list .item').on('mouseover', function () {
  var video = $(this).children('.video').get(0)
  $(this).addClass('active')
  video.play()
}).on('mouseleave', function () {
  $(this).removeClass('active')
  $(this).children('.video').get(0).pause()
})

//地图
if (document.getElementById('yearn_map')) {
  var markerArr = [{
    title: "育人教育集团易尔实验园区",
    content: "电 话：0371-86666161<br>地 址：河南省郑州市金水区黄河南路商鼎路东200米北万安街",
    point: "113.754424|34.762148",
    isOpen: 1,
    icon: {
      w: 23,
      h: 25,
      l: 46,
      t: 21,
      x: 9,
      lb: 12
    }
  }];
  initMap(); 
}

function addMarker() {
  for (var i = 0; i < markerArr.length; i++) {
    var json = markerArr[i];
    var p0 = json.point.split("|")[0];
    var p1 = json.point.split("|")[1];
    var point = new BMap.Point(p0, p1);
    var iconImg = createIcon(json.icon);
    var marker = new BMap.Marker(point, {
      icon: iconImg
    });
    var iw = createInfoWindow(i);
    var label = new BMap.Label(json.title, {
      "offset": new BMap.Size(json.icon.lb - json.icon.x + 10, -20)
    });
    marker.setLabel(label);
    map.addOverlay(marker);
    label.setStyle({
      borderColor: "#808080",
      color: "#333",
      cursor: "pointer"
    });

    (function () {
      var index = i;
      var _iw = createInfoWindow(i);
      var _marker = marker;
      _marker.addEventListener("click", function () {
        this.openInfoWindow(_iw);
      });
      _iw.addEventListener("open", function () {
        _marker.getLabel().hide();
      })
      _iw.addEventListener("close", function () {
        _marker.getLabel().show();
      })
      label.addEventListener("click", function () {
        _marker.openInfoWindow(_iw);
      })
      if (!!json.isOpen) {
        label.hide();
        _marker.openInfoWindow(_iw);
      }
    })()
  }
}

function createInfoWindow(i) {
  var json = markerArr[i];
  var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title +
    "</b><div class='iw_poi_content'>" + json.content + "</div>");
  return iw;
}

function createIcon(json) {
  var icon = new BMap.Icon("http://map.baidu.com/image/us_mk_icon.png", new BMap.Size(json.w, json.h), {
    imageOffset: new BMap.Size(-json.l, -json.t),
    infoWindowOffset: new BMap.Size(json.lb + 5, 1),
    offset: new BMap.Size(json.x, json.h)
  })
  return icon;
}

//地图
function initMap() {
  createMap(); //
  setMapEvent(); //
  addMapControl(); //
  addMarker(); //
}

function createMap() {
  var map = new BMap.Map("yearn_map"); //
  var point = new BMap.Point(113.754424, 34.762148); //
  map.centerAndZoom(point, 20);
  window.map = map; //
}


function setMapEvent() {
  map.enableDragging(); //
  map.enableKeyboard(); //
  map.disableScrollWheelZoom();//禁用地图滚轮放大缩小，默认禁用(可不写)
  map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
  map.disableKeyboard();//禁用键盘上下左右键移动地图，默认禁用(可不写)

}

//向地图添加控件
function addMapControl() {
  var navControl = new BMap.NavigationControl({
    anchor: BMAP_ANCHOR_TOP_RIGHT,
    type: 3
  });
  map.addControl(navControl);
}