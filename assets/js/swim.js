
//场馆照片swiper 
var swiper= new Swiper('.swiper-container', {
  slidesPerView: 3,
  slidesPerColumn: 2,
  spaceBetween: 15,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.park-next',
    prevEl: '.park-prev',
  },
  breakpoints: {
    1024: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    640: {
      slidesPerView: 1,
      spaceBetween: 20
    },
  }
});

function initMobileSwiper() {
  swiper = new Swiper('.swiper-container', {
    slidesPerView: 2,
    // slidesPerColumn: 2,
    spaceBetween: 15,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.park-next',
      prevEl: '.park-prev',
    },
  });
}

//师资团队轮播
var teacherSwiper = new Swiper('.teachers-swiper', {
  spaceBetween: 20,
  slidesPerView: 5,
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

//地图
if (document.getElementById('yearn_map')) {
  var markerArr = [{
    title: "易尔少年游泳馆",
    content: "电 话：0371-86162631<br>地 址：河南省郑州市金水区黄河南路商鼎路东200米北万安街",
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
