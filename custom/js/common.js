"use strict"; // スマホメニュー開閉

var menuVisivble = function menuVisivble() {
  var body = document.body;
  var spbtn = document.querySelectorAll(".gnav-btn");
  console.log(spbtn);
  spbtn.forEach(function (btn) {
    btn.addEventListener("click", function () {
      body.classList.toggle("is-view");
    });
  });
};

menuVisivble(); // 目次

var tableOfContents = function tableOfContents() {
  var boxes = document.querySelectorAll(".box");
  console.log(boxes);
  var options = {
    root: null,
    // 今回はビューポートをルート要素とする
    rootMargin: "-30% 0px -70% 0px",
    // ビューポートの中心を判定基準にする
    threshold: [0] // 閾値は0

  };
  var observer = new IntersectionObserver(doWhenIntersect, options); // それぞれのboxを監視する

  boxes.forEach(function (box) {
    observer.observe(box);
  });
  /**
   * 交差したときに呼び出す関数
   * @param entries
   */

  function doWhenIntersect(entries) {
    // 交差検知をしたもののなかで、isIntersectingがtrueのDOMを色を変える関数に渡す
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        activateIndex(entry.target);
      }
    });
  }
  /**
   * 目次の色を変える関数
   * @param element
   */


  function activateIndex(element) {
    // すでにアクティブになっている目次を選択
    var currentActiveIndex = document.querySelector("#indexList .active"); // すでにアクティブになっているものが0個の時（=null）以外は、activeクラスを除去

    if (currentActiveIndex !== null) {
      currentActiveIndex.classList.remove("active");
    } // 引数で渡されたDOMが飛び先のaタグを選択し、activeクラスを付与


    var newActiveIndex = document.querySelector("#indexList a[href='#".concat(element.id, "']"));
    newActiveIndex.classList.add("active");
  }
};

tableOfContents();

var scrooll = function scrooll() {
  window.addEventListener('DOMContentLoaded', function () {
    var anchorLinks = document.querySelectorAll('a[href^="#"]');
    var anchorLinksArr = Array.prototype.slice.call(anchorLinks);
    anchorLinksArr.forEach(function (link) {
      link.addEventListener('click', function (e) {
        e.preventDefault();
        var targetId = link.hash;
        var targetElement = document.querySelector(targetId);
        var targetOffsetTop = window.pageYOffset + targetElement.getBoundingClientRect().top - 80;
        window.scrollTo({
          top: targetOffsetTop,
          behavior: "smooth"
        });
      });
    });
  });
};

scrooll();

var tab = function tab() {
  document.addEventListener('DOMContentLoaded', function () {
    // タブに対してクリックイベントを適用
    var tabs = document.getElementsByClassName('tab');

    for (var i = 0; i < tabs.length; i++) {
      tabs[i].addEventListener('click', tabSwitch, false);
    } // タブをクリックすると実行する関数


    function tabSwitch() {
      // タブのclassの値を変更
      document.getElementsByClassName('is-active')[0].classList.remove('is-active');
      this.classList.add('is-active'); // コンテンツのclassの値を変更

      document.getElementsByClassName('is-show')[0].classList.remove('is-show');
      var arrayTabs = Array.prototype.slice.call(tabs);
      var index = arrayTabs.indexOf(this);
      document.getElementsByClassName('panel')[index].classList.add('is-show');
    }

    ;
  }, false);
};

tab(); //スクロール固定

var scroll = function scroll() {
  var bar = document.querySelector('.tb-box'); // bar.style.overflow = "auto";
  // bar.style.top = "100px";
  // bar.style.overflow = "auto";
};

scroll(); //スクロール固定

var base = function base() {
  document.querySelectorAll('.base-btn').forEach(function (button) {
    button.addEventListener('click', function () {
      button.nextElementSibling.classList.toggle('show');
      button.classList.toggle('show');
    });
  });
};

base(); // // 遅延読み込み
// const　lazy = () => {
// const $lazy = document.querySelectorAll(".load");
// const options = {
//   root: null, // 今回はビューポートをルート要素とする
//   rootMargin: "0px 0px -200px 0px", // ビューポートの中心を判定基準にする
//   threshold: 0 // 閾値は0
// };
// // inViewportは関数　optionsはオプション
// const io = new IntersectionObserver(inViewport, options);
// Array.from($lazy).forEach( element => {
//   io.observe(element);
// });
// function inViewport(entries) {
//   // 交差検知をしたもののなかで、isIntersectingがtrueのDOMを色を変える関数に渡す
//   entries.forEach(entry => {
//     if (entry.isIntersecting) {
//       const img = entry.target;
//       img.addEventListener("load", ()=>{
//         img.classList.add("is-lazyload");
//       });
//       const lb = entry.target;
//       lb.classList.add("is-l-box");
//       const imgEl = entry.target;
//       imgEl.src = imgEl.dataset.src;
//     }
//   });
// }
// function doWhenIntersect(entries) {
//   // 交差検知をしたもののなかで、isIntersectingがtrueのDOMを色を変える関数に渡す
//   entries.forEach(entry => {
//     if (entry.isIntersecting) {
//       activateIndex(entry.target);
//     }
//   });
// }
// }
// lazy();
// 遅延読み込み

var lazy = function lazy() {
  var $lazy = document.querySelectorAll('.lazyload');
  var options = {
    root: null,
    // 今回はビューポートをルート要素とする
    rootMargin: "0px 0px -200px 0px",
    // ビューポートの中心を判定基準にする
    threshold: 0 // 閾値は0

  };
  var io = new IntersectionObserver(inViewport, options);
  Array.from($lazy).forEach(function (element) {
    io.observe(element);
  });

  function inViewport(entries, observer) {
    entries.forEach(function (entry) {
      if (entry.intersectionRatio > 0) {
        var imgEl = entry.target;
        imgEl.src = imgEl.dataset.src;
        imgEl.addEventListener('load', function () {
          imgEl.classList.add('is-lazyloaded');
        });
        io.unobserve(entry.target);
      }
    });
  }
};

lazy();